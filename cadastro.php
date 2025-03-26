<?php
    include("conexaoLogin.php")
    $nome = "";
    $email = "";
    $senha = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    }
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Email já registrado!";
    } else {
        $sql = "INSERT INTO users (nome, email, password) VALUES ('$nome', '$email', '$senha')";
        if ($conn->query($sql) === TRUE) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>       
    <div class="corpo">
        <div class="bemvindo">
            <p>Faça seu Cadastro!</p>
        </div>
        <br>
        <div>
        <form method="POST">
            <label for="">Digite seu nome</label>
            <br>
            <input name="nome" type="text">
            <br>
            <label for="">Digite seu e-mail</label>
            <input name="email" type="email">
            <br>
            <label for="">Digite sua senha</label>
            <input name="senha" type="password">
            <br>
            <button class="entrar" type="submit">Cadastrar</button>
        </div>
        </form>
    </div>
    
</body>
</html>