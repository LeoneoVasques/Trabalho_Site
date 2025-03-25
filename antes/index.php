<?php
include ("conexao.php");
$sql = "CREATE TABLE IF NOT EXISTS usuarios
    (id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    idade DECIMAL (4),
    telefone DECIMAL(15));";
$result = $mysqli->query($sql);

$sql ="SELECT * FROM usuarios;";
$result = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela de Usuários</title>
</head>
<body>
    <h1>Tabela de usuários cadastrados</h1>
    <br>
    <div class="botao-cadastro"><a href="criar.php">Novo Cadastro</a></div>
    <br>
    <table>
    <thead>
        <tr>
            <th class='id-row'>id</th>
            <th class='nome-row'>Nome</th>
            <th class='email-row'>Email</th>
            <th class='idade-row'>Idade</th>
            <th class='telefone-row'>Telefone</th>
            <th class='acao-row'>Ação</th>
        </tr>
    </thead>
    </table>
    <?php
    while($row = $result->fetch_assoc()){
        echo "
            <table>
                <tbody>
                    <tr>
                        <td class='id-row'>$row[id]</td>
                        <td class='nome-row'>$row[nome]</td>
                        <td class='email-row'>$row[email]</td>
                        <td class='idade-row'>$row[idade]</td>
                        <td class='telefone-row'>$row[telefone]</td>
                        <td class='acao-row'>
                            <a class='botao-editar' href='editar.php?id=$row[id]'>Editar</a>
                            <a class='botao-excluir' href='excluir.php?id=$row[id]'>Excluir</a>
                        </td>
                    </tr>
                </tbody>
            </table>   
        ";
    }
    ?>
    
</body>
</html>