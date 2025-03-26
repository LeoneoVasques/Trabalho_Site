<?php
    include("conexaoLogin.php");
    $email = "";
    $senha = "";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = "SELECT email, senha FROM users WHERE email = '$email'";
        $result = $mysqli->query($sql);
        if ($result->num_rows == 0) {
            echo "<script>alert('Usuário não encontrado!');</script>";
        }
        else{
            echo "<script>
            alert('Login bem sucedido!');
            window.location.href = 'aplicativo.php';
            </script>";
        }
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
        <form method="POST">
            <label for="">Digite seu e-mail</label>
            <br>
            <input name="email" type="email" required>
            <br>
            <br>
            <label for="">Digite sua senha</label>
            <input name="senha" type="password" required>
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