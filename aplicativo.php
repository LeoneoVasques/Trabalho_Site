<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banco de dados</title>
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <header>
      <p><b>Estoque</b></p>
      <div class="pesquisa">
        <a href=""><img src="img/search.svg" alt="" /></a>
        <input type="text" />
      </div>
      <a href=""><img src="img/bell.svg" alt="" /></a>
      <a href="" class="perfil"><img src="img/person-circle.svg" alt="" /></a>
    </header>
    <div class="corpo">
      <span class="menu">
        <div class="link">
          <div class="menusopraele">
            <h3>Menu</h3>
          </div>
        </div>
        <div class="link">
          <a href="">
            <img src="img/kanban.svg" alt="" />
            <h3>Dashboard</h3>
          </a>
        </div>
        <div class="link">
          <a href="">
            <img src="img/boxes.svg" alt="" />
            <h3>Produtos</h3>
          </a>
        </div>
        <div class="link">
          <a href="">
            <img src="img/truck.svg" alt="" />
            <h3>Fornecedores</h3>
          </a>
        </div>
        <div class="link">
          <a href="">
            <img src="img/clipboard2-data.svg" alt="" />
            <h3>Relatórios</h3>
          </a>
        </div>
        <div class="link">
          <a href="">
            <img src="img/gear.svg" alt="" />
            <h3>Configurações</h3>
          </a>
        </div>
        <div class="link">
          <a href="">
            <img src="img/box-arrow-left.svg" alt="" />
            <h3>Sair</h3>
          </a>
        </div>
      </span>
      <span class="bd">
        <table>
          <tr>
            <th>Nome do Produto</th>
            <th>ID do Produto</th>
            <th>Quantidade</th>
            <th>Valor (R$)</th>
          </tr>
          <tr>
            <td>Produto A</td>
            <td>001</td>
            <td>10</td>
            <td>50,00</td>
          </tr>
          <tr>
            <td>Produto B</td>
            <td>002</td>
            <td>5</td>
            <td>30,00</td>
          </tr>
          <tr>
            <td>Produto C</td>
            <td>003</td>
            <td>8</td>
            <td>40,00</td>
          </tr>
        </table>
      </span>
    </div>
  </body>
</html>
