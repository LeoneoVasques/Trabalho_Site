<?php
    include("conexaoLogin.php");
    $email = "";
    $senha = "";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $email = $_GET["email"];
        $senha = $_GET["senha"];
    }







?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>       
    <div class="corpo">
        <div class="bemvindo">
            <p>Bem-vindo de volta!</p>
        </div>
        <br>
        <div>
        <form action="">
            <label for="">Digite seu e-mail</label>
            <br>
            <input type="email">
            <br>
            <br>
            <label for="">Digite sua senha</label>
            <input type="password">
            <br>
            <a class="esqueci" href="">Esqueci a senha</a>
            <br>
            <button class="entrar" type="submit">Entrar</button>
        </div>
        <div class="embaixo">
            <p class="textinho">Ainda não tem uma conta? <b><a href="cadastro.php">Cadastre-se</a></b></p>
        </div>
        </form>
    </div>
    
</body>
</html>