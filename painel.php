<?php

include('conexao.php');
include('verifica_login.php');


$email = $_SESSION['Email'];
    $query="select * from usuarios where email='$email'";
     $resultado=mysqli_query($conexao,$query); 
     $Nome = mysqli_fetch_assoc($resultado);
    
?>

<html>
    <head>
    <meta charset="UTF-8">    
    <link rel="stylesheet" type="text/css" href="style3.css">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    
    <body>
        <div id="menu">
            
                <li> <h1>Ola <?php echo $Nome["NomeUsuario"];?></h1></li> 
                <h1><button type="button" class="btn btn-primary"><a href="publicar.php"><b>Publique Algo</b></a></button></h1>

                <h1><button type="button" class="btn btn-danger"><a href="logout.php">Sair</a></button></h1>
            
        </div>
        <div class="well well-sm">
    
    
    
            
            
            <?php		
	$query = "SELECT * FROM Post ORDER BY IdPost DESC";
        $result = mysqli_query($conexao, $query);
	$conta = mysqli_num_rows($result);
				
	if($conta <= 0){
            echo "<code>Nenhuma postagem cadastrada no banco de dados.</code>";
	}else{
	while($row = mysqli_fetch_array($result)){
	$IdPost = $row['IdPost'];
	$Titulo = $row['Titulo'];
	$Descricao = $row['Descricao'];
	$Imagem = $row['Imagem'];
	$Data = $row['Data'];
	$Hora = $row['Hora'];
	$IdUsu_Post = $row['IdUsu_Post'];
	$sql = "select * from usuarios inner join Post on usuarios.IdUsuario='$IdUsu_Post'";
	$queryy = mysqli_query($conexao,$sql) or die (mysqli_error());
	$linha = mysqli_fetch_assoc($queryy);
    ?>  
	<div id="panel" align="left">
		<p><a class="titulo"><?php echo $Titulo;?></a></p>
		<?php if($Descricao != null){?><p class="descricao"><?php echo $Descricao;?></p><?php }?>
		<?php if($Imagem != null){?><p><img src="<?php echo $Imagem;?>" class="foto"/></p><?php }?>
		<p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Postado em: <?php echo $Data."-".$Hora;?></br> 
                   <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Postado por: <?php echo $linha['NomeUsuario'];?></p>
	</div>


	<?php }}?>
</div>
    </body>
</html>
