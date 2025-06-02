<?php
  include("conexao.php");
    $sql ="CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR (100) NOT NULL,
    quantidade VARCHAR(100),
    valor FLOAT,
    total FLOAT GENERATED ALWAYS AS (quantidade * valor) STORED)";
    $result = $mysqli->query($sql);
    $sql ="SELECT * FROM produtos";
    $result = $mysqli->query($sql);
    $produto = "";
    $quantidade = "";
    $valor = "";
    $total = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $produto = $_POST["produto"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];
        $sql ="INSERT INTO produtos (produto, quantidade, valor) VALUES ('$produto', '$quantidade', '$valor')";
        $result = $mysqli->query($sql);
        header("location: aplicativo.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banco de dados</title>
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <div class="corpo">
      <span class="menu">
        <div class="link">
          <div class="menusopraele">
            <h3>Menu</h3>
          </div>
        </div>
        <div class="link2">
          <a href="aplicativo.php">
            <img src="img/boxes.svg" alt="" />
            <h3 id="selecionado">Produtos</h3>
          </a>
        </div>
        <div class="link">
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
            <h2>Novo Produto</h2>
        </div>
        <br>
        <div>
        <form method="POST">
            <label for="">Nome do Produto</label>
            <br>
            <input name="produto" type="text" required>
            <br>
            <label for="">Quantidade</label>
            <br>
            <input name="quantidade" type="number" >
            <br>
            <label for="">Valor</label>
            <br>
            <input name="valor" type="text">
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
