<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php
    ?>
    <div class="login-page">
        <div class="form">
             <form class="login-form" action="cadastrar-usuario.php" method="post">
                <input type="text" placeholder="Login" name = "login" id="login"/>
                <input type="password" placeholder="Senha" name = "senha" id="senha"/>
                <input type="password" placeholder="Confirmar Senha" name = "confirmaSenha" id="senha"/>
                <button type="submit" id="entrar">Login</button>
                <p class="message">Já é cadastrado? <a href="index.php">Login</a></p>
            </form>

        </div>
    </div>

</body>

</html>
