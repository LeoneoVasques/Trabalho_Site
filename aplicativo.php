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
        <div class="adicionar">
        <a class="novo_produto" href="cadastrar_produto.php">Novo Produto</a>
        </div>
      <table>
        <thead>
          <tr>
            <th class='id-row'>ID</th>
            <th class='produto-row'>Produto</th>
            <th class='quantidade-row'>Quantidade</th>
            <th class='valor-row'>Valor</th>
            <th class='total-row'>Valor em estoque</th>
            <th class='acao-row'>Ação</th>
          </tr>
        </thead>
    <?php
    while($row = $result->fetch_assoc()){
        echo "
                    <tr>
                        <td  class='id-row'>$row[id]</td>
                        <td class='produto-row'>$row[produto]</td>
                        <td class='quantidade-row'>$row[quantidade]</td>
                        <td class='valor-row'>R$ $row[valor]</td>
                        <td class='total-row'>R$ $row[total]</td>
                        <td class='acao-row'>
                            <a class='botao-editar' href='editar_produto.php?id=$row[id]'>Editar</a>
                            <a class='botao-excluir' href='excluir.php?id=$row[id]'>Excluir</a>
                        </td>
                    </tr> 
        ";
    }
    ?>
    </table>
      </span>
    </div>
  </body>
</html>
