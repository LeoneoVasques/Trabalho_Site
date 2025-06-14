<?php
  include("conexao.php");
  include("log.php");
  $sql ="CREATE TABLE IF NOT EXISTS fornecedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fornecedor VARCHAR (100) NOT NULL)";
    $result = $mysqli->query($sql);
    $sql ="SELECT * FROM fornecedores";
    $result = $mysqli->query($sql);
    $fornecedor = "";
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $fornecedor = $_POST["fornecedor"];
      $sql ="INSERT INTO fornecedores (fornecedor) VALUES ('$fornecedor')";
      $result = $mysqli->query($sql);
      registrar_log($mysqli, 'CRIAR', 'fornecedores', "$fornecedor");
      header("location: fornecedores.php");
      exit;
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fornecedores</title>
    <link rel="stylesheet" href="css/style3.css" />
  </head>
  <body>
    <div class="corpo">
      <span class="menu">
        <div class="link">
          <div class="menusopraele">
            <h3>Menu</h3>
          </div>
        </div>
        <div class="link">
          <a href="aplicativo.php">
            <img src="img/boxes.svg" alt="" />
            <h3 id="selecionado">Produtos</h3>
          </a>
        </div>
        <div class="link2">
          <a href="fornecedores.php">
            <img src="img/truck.svg" alt="" />
            <h3>Fornecedores</h3>
          </a>
        </div>
        <div class="link">
          <a href="relatorios.php">
            <img src="img/clipboard2-data.svg" alt="" />
            <h3>Relatórios</h3>
          </a>
        </div>
        <div class="link">
          <a href="index.php">
            <img src="img/box-arrow-left.svg" alt="" />
            <h3>Sair</h3>
          </a>
        </div>
      </span>
      <span class="bd">
      <div class="corpo2">
        <div class="bemvindo">
            <h2>Novo Fornecedor</h2>
        </div>
        <br>
        <div>
        <form method="POST">
            <label for="">Nome do Fornecedor</label>
            <br>
            <input name="fornecedor" type="text" required>
            <br>
            <button style="margin-top:30px" class="botao-editar" type="submit">Cadastrar</button>
            <br>
        </form>
        </div>
    </div>
      </span>
    </div>
  </body>
</html>
