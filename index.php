<?php
    session_start();    
?>
<html>
        <head>
        <meta charset="UTF-8">
        <title>Login Do Role</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="https://www.fit2work.com.au/assets/img/avatars/LoginIconOrg.png" class="avatar">
            
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <script type="text/javascript">
                alert("O Email ou senha estão errados");
                </script>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            
            <h1>FAÇA O LOGIN</h1>
            <form method="POST" action="login.php">
                <p>Email</p>
                <input type="text" name="Email" placeholder="Digite o seu Email" autofocus required>
                <p>Senha</p>
                <input type="password" name="senha" placeholder="Digite a sua senha" required>
                <input type="submit" value="Login"><br>
                
                <a href="recuperasenha.php">Esqueceu a sua senha?</a><br>
                <a href="cadastro.php">Criar uma conta</a><br>
                
            </form>                
            
        </div>
        
    </body>
</html>
