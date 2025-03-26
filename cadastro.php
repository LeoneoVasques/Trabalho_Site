<?php
    include("conexaoLogin.php");
    $nome = "";
    $email = "";
    $senha = "";

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $nome = $_POST['nome'];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                echo "<script>alert('Email já registrado!');</script>";
            } 
            else {
                $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
                    if ($mysqli->query($sql) === TRUE) {
                        echo "<script>
                        alert('Usuário registrado com sucesso!');
                        window.location.href = 'index.php';
                        </script>";
                    exit();
                    } 
            else {
            echo "Erro: " . $mysqli->error;
        }
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
            <input name="nome" type="text" required>
            <br>
            <label for="">Digite seu e-mail</label>
            <input name="email" type="email" required>
            <br>
            <label for="">Digite sua senha</label>
            <input name="senha" type="password" required>
            <br>
            <button class="entrar" type="submit">Cadastrar</button>
        </form>
        </div>
    </div>
    
</body>
</html>