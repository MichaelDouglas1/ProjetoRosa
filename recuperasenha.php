<?php    
session_start();    
include ('conexao.php');
      
   ?>
<html>
        <head>
        <meta charset="UTF-8">
        <title>RECUPERAAA</title>
        <link rel="stylesheet" type="text/css" href="style5.css">
    </head>
    <body>
        <div class="loginbox">                       
                
            <h1>ESQUECEU A SUA SENHA BB?</h1>
            <form method="POST" action="recupera.php">
                <p>Email</p>
                <input type="text" name="Email" placeholder="Digite o seu Email" autofocus required>
                <p>Sua data de Nascimento</p>
                <input type="date" name="Data_Nascimento" required>
                <input type="submit" value="Recuperar" name="Recupera"><br>
                <input type="hidden" name="envia" value="send"/>
                
                <a href="index.php"><input type="button" value="Cancelar"></a>
                
                
                
            </form>
            
            
        </div>
        
    </body>
</html>
