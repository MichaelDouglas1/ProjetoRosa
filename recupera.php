<?php 
include ('conexao.php');

if(empty($_POST['Email']) || empty($_POST['Data_Nascimento'])){
    header('Location: recuperasenha.php');
    exit();
}


$Email=mysqli_real_escape_string($conexao,$_POST['Email']);
$Data_Nascimento=mysqli_real_escape_string($conexao,$_POST['Data_Nascimento']);

$queryyy = "SELECT senha FROM usuarios WHERE Email = '$Email' and Data_Nascimento ='$Data_Nascimento'";
$Rsenha = mysqli_query($conexao, $queryyy);
$RSenha2 = mysqli_fetch_assoc($Rsenha);

$recebe1 = $RSenha2["senha"];

?>

<html>
        <head>
        <meta charset="UTF-8">
        <title>RECUPERADO</title>
        <link rel="stylesheet" type="text/css" href="style5.css">
    </head>
    <body>
        <div class="loginbox">                       
                
            <h1>Sua senha atual é<?php echo $recebe1;?><br> Não a perca de novo. Mas se perder é so voltar aqui.<br>PAPAI TE AMA</h1>
                           
                <a href="index.php"><input type="button" value="Voltar"></a>
                
                
                
            </form>
            
            
        </div>
        
    </body>
</html