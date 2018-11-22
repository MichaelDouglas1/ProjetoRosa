 <?php
session_start();
include("conexao.php");

if(empty($_POST['Email']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$Email = mysqli_real_escape_string($conexao,$_POST['Email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select Email from usuarios where Email = '{$Email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row= mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['Email'] = $Email;
    header('Location: painel.php');
    exit();      
} else {
    $_SESSION['nao_autenticado']=TRUE;
    header('Location: index.php');
    exit();    
    }
?>

