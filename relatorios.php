<?php
    include("conexao.php");
    include("log.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Relatorios</title>
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
            <h3>Produtos</h3>
          </a>
        </div>
        <div class="link">
          <a href="fornecedores.php">
            <img src="img/truck.svg" alt="" />
            <h3>Fornecedores</h3>
          </a>
        </div>
        <div class="link2">
          <a href="relatorios.php">
            <img src="img/clipboard2-data.svg" alt="" />
            <h3 id="selecionado">Relatórios</h3>
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
          <a class="novo_produto" href="cadastrar_produto.php"></a>
        </div>
      <table>
        <thead>
          <tr>
            <th class='id-row'>ID</th>
            <th class='produto-row'>Ação</th>
            <th class='quantidade-row'>Tabela</th>
            <th class='quantidade-row'>Item</th>
            <th class='valor-row'>Horário</th>
          </tr>
        </thead>
    <?php
    $result = $mysqli->query("SELECT * FROM logs ORDER BY timestamp DESC");
    while($row = $result->fetch_assoc()){
        echo "
                    <tr>
                        <td  class='id-row'>$row[id]</td>
                        <td class='acao-row'>$row[action]</td>
                        <td class='tabela-row'>$row[table_name]</td>
                        <td class='tabela-row'>$row[item]</td>
                        <td class='detalhes-row'>$row[timestamp]</td>
                    </tr> 
        ";
    }
    ?>
    </table>
      </span>
    </div>
  </body>
</html>
