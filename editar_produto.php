<?php
  include("conexao.php");
    $produto = "";
    $quantidade = "";
    $valor = "";
    $total = "";
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = $_GET["id"];
        $sql = "SELECT * FROM produtos WHERE id=$id";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $produto = $row["produto"];
        $quantidade = $row["quantidade"];
        $valor = $row["valor"];
        }
        else {
            $id = $_GET["id"];
            $produto = $_POST["produto"];
            $quantidade = $_POST["quantidade"];
            $valor = $_POST["valor"];
            $sql = "UPDATE produtos SET produto='$produto', quantidade='$quantidade', valor='$valor' WHERE id = $id ";
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
    <header>
      <p><b>Estoque</b></p>
      <div class="pesquisa">
        <a id="#" href=""><img src="img/search.svg" alt="" /></a>
        <input class="input_search" type="text" />
      </div>
      <a id="#1" href=""><img src="img/bell.svg" alt="" /></a>
      <a id="#2" href="" class="perfil"><img src="img/person-circle.svg" alt="" /></a>
    </header>
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
            <h2>Editar Produto</h2>
        </div>
        <br>
        <div>
        <form method="POST">
            <label for="">Nome do Produto</label>
            <br>
            <input name="produto" type="text" required value="<?php echo $produto;?>">
            <br>
            <label for="">Quantidade</label>
            <br>
            <input name="quantidade" type="number" value="<?php echo $quantidade;?>">
            <br>
            <label for="">Valor</label>
            <br>
            <input name="valor" type="text" value="<?php echo $valor;?>">
            <br>
            <button style="margin-top:30px" class="botao-editar" type="submit">Salvar</button>
            <br>
        </form>
        </div>
    </div>
      </span>
    </div>
  </body>
  <script>
  document.getElementById("#").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Indisponível no momento."); 
  });
  document.getElementById("#1").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Indisponível no momento."); 
  });
  document.getElementById("#2").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Indisponível no momento."); 
  });
  document.getElementById("#3").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Indisponível no momento."); 
  });
  document.getElementById("#6").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Indisponível no momento."); 
  });
</script>

</html>
