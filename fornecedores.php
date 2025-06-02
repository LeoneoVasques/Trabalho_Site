<?php
  include("conexao.php");
    $sql ="CREATE TABLE IF NOT EXISTS fornecedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fornecedor VARCHAR (100) NOT NULL)";
    $result = $mysqli->query($sql);
    $sql ="SELECT * FROM fornecedores";
    $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fornecedores</title>
    <link rel="stylesheet" href="css/style3.css"/>
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
            <h3>Produtos</h3>
          </a>
        </div>
        <div class="link2">
          <a href="fornecedores.php">
            <img src="img/truck.svg" alt="" />
            <h3 id="selecionado">Fornecedores</h3>
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
        <a class="novo_fornecedor" href="cadastrar_fornecedor.php">Novo Fornecedor</a>
        </div>
      <table>
        <thead>
          <tr>
            <th class='id-row'>id</th>
            <th class='fornecedor-row'>Fornecedor</th>
            <th class='acao-row'>Ação</th>
          </tr>
        </thead>
    <?php
    while($row = $result->fetch_assoc()){
        echo "
                    <tr>
                        <td  class='id-row'>$row[id]</td>
                        <td class='fornecedor-row'>$row[fornecedor]</td>
                        <td class='acao-row'>
                            <a class='botao-editar' href='editar_fornecedores.php?id=$row[id]'>Editar</a>
                            <a class='botao-excluir' href='excluir_fornecedores.php?id=$row[id]'>Excluir</a>
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
