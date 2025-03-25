<?php
$id = "";
$nome = "";
$email = "";
$idade = "";
$telefone = "";

include("conexao.php");
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$id = $_GET["id"];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$id = $row["id"];
$nome = $row["nome"];
$email = $row["email"];
$idade = $row["idade"];
$telefone = $row["telefone"];
}
else {
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', idade='$idade', telefone='$telefone' WHERE id = $id ";
    $result = $mysqli->query($sql);
    header("location: index.php");
    exit;
}
if (!$result){
    die("Query inválida: ". $mysqli->connect_errno .") ". $mysqli->connect_error);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuário</title>
</head>
<body>
    <div class="titulo">
    <h1>Editar usuário</h1>
    </div>
    <div class="forms">
    <form method="POST">
        <input type="hidden" value="<?php echo $id;?>">
        <label>Nome:</label>
        <br>
        <input name="nome" class="input" type="text" placeholder="Nome" required value="<?php echo $nome;?>">
        <br>
        <label for="email">E-mail:</label>
        <br>
        <input name="email" id="email" type="text" placeholder="E-mail" required value="<?php echo $email;?>">
        <br>
        <label for="idade">Idade:</label>
        <br>
        <input name="idade" id="idade" type="number" placeholder="Idade" required value="<?php echo $idade;?>">
        <br>
        <label for="telefone">Telefone:</label>
        <br>
        <input name="telefone" id="telefone" type="number" placeholder="Telefone" required value="<?php echo $telefone;?>">
        <br> 
        <button type="submit"><b>Enviar</b></button>
         <a class="botao-cancelar" href="index.php">Cancelar</a>
    </div>
</form>

</body>
</html>
