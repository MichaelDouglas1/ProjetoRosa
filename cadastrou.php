<?php

include ("conexao.php");
 
$NomeUsuario = $_POST['NomeUsuario'];
$Email=$_POST['Email'];
$Data_Nascimento = $_POST['Data_Nascimento'];
$senha=$_POST['senha'];


$sql= "insert into usuarios (NomeUsuario,Email,Data_Nascimento,senha)values ('$NomeUsuario','$Email','$Data_Nascimento','$senha')";
$salvar = mysqli_query($conexao,$sql);

header('Location: index.php');
?>