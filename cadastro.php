<html>
   </body>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Do Role</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
            
        <div class="loginbox">
            <img src="https://www.fit2work.com.au/assets/img/avatars/LoginIconOrg.png" class="avatar">
            <h1> Faça o seu cadastro</h1>
            <form method="post" action="cadastrou.php">
               
                <p>Seu nome/nick de usuario</p>
                <input type="text" name="NomeUsuario" class="campo" maxlength="45" required autofocus
                       placeholder="Digite o seu nome ou nick de usuario">
                
                <p>E-mail</p> 
                <input type="text" name="Email" class="campo" maxlength="50" required
                       placeholder="Digite o seu E-mail">
                               
                <p>Data de nascimento</p>
                <input type="date" name="Data_Nascimento" required>
                
                <p>Senha</p>
                <input type="password" name="senha" id="senha" required 
                       placeholder="Digite a sua senha ">
                                
                <input type="submit" name="" value="Cadastrar"> 
                <a href="index.php"><input type="button" value="Cancelar"></a>
                       <br>
            </form>                
            
        </div>
       
</html>

