<?php
    include("conexao.php");
        $sql = "CREATE TABLE IF NOT EXISTS relatorio_log (
        id INT AUTO_INCREMENT PRIMARY KEY,
        pagina VARCHAR(100) NOT NULL,
        banco_origem VARCHAR(100) NOT NULL,
        conteudo TEXT,
        data_hora DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $result = $mysqli->query($sql);
        $sql ="SELECT * FROM relatorio_log";
        $result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Relatorios</title>
    <link rel="stylesheet" href="css/style4.css" />
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
  <?php
$mysqli = new mysqli("localhost", "root", "", "banco_log");

$result = $mysqli->query("SELECT * FROM logs ORDER BY data_hora DESC");

while ($log = $result->fetch_assoc()) {
    echo "[" . $log['data_hora'] . "] ";
    echo $log['pagina'] . " (Banco: " . $log['banco_origem'] . "): ";
    echo $log['conteudo'] . "<br>";
}
?>
</html>
