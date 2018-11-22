

<html>
    <head>
        <meta charset="UTF-8">    
        <link rel="stylesheet" type="text/css" href="style4.css">
    </head>
<div id="well well-sm">
	<div class="loginbox" align="center">
		<form action="" method="POST" enctype="multipart/form-data">
                    <p><input type="text" name="Titulo" id="Titulo" placeholder="Insira um título" class="form form-control"/></p><br>
                    <p><textarea name="Descricao" id="Descricao" placeholder="Poste sua gameplay,dicas,marque um campeonato ou um gameplay casual." class="form form-control"></textarea></p><br>
			<p><input type="file" name="image" id="image" class="form form-control"/></p><br>
			<p align="center"><input type="submit" value="Publicar" class="btn btn-default"/></p>
                        <a href="painel.php"><input type="button" value="Cancelar"></a>
			<input type="hidden" name="enviar" value="send"/>
		</form>
            
		<?php
                
    include ("conexao.php");
    include('verifica_login.php');
    $email = $_SESSION['Email'];
    $sql = "SELECT IdUsuario FROM usuarios WHERE Email = '$email'";
    $resultado = mysqli_query($conexao, $sql);
    $resultado2 = mysqli_fetch_assoc($resultado);
    
    
    $recebe = $resultado2["IdUsuario"];
        

			if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){
				$Titulo = $_POST['Titulo'];
				$Descricao = $_POST['Descricao'];
				$IdUsu_Post = $_POST['IdUsu_Post'];

				date_default_timezone_set('America/Sao_Paulo');
				$Data = date("d/m/Y");
				$Hora = date("H:i");

				if(empty($Titulo)){
					echo "É obrigatório ter um titulo e colocar o nome do postador.";
				}else{

					$uploaddir = 'imagem/uploads/';
				$uploadfile = $uploaddir.basename($_FILES['image']['name']);
				$imagename = $uploaddir.basename($_FILES['image']['name']);

				if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
					echo "Imagem enviada com sucesso";
					$query = "INSERT INTO post (Titulo, Descricao, Imagem, Data, Hora, IdUsu_Post) VALUES ('$Titulo', '$Descricao', '$imagename', '$Data', '$Hora', '$recebe')";

					if(mysqli_query($conexao,$query)){
                                            header('Location: painel.php');
					}

				}else{
					echo "Erro ao enviar a imagem";
				}

				}

				

			}

		?>
	</div>
</div>
</html>