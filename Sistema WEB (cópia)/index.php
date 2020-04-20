<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Automatic Office</title>
    <link rel="stylesheet" type="text/css" href="css/longin.css">
</head>
<body background="imagens/officeFour.jpg" no-repeat>
    <div class="login">
        <img src="imagens/loginTwo.png" class="usuario" width="100" height="100" alt="">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="Nome do usuario">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Senha"> 
            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
        </form>
    </div>
</body>
</html>