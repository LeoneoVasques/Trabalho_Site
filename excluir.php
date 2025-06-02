<?php
include("conexao.php");
include("log.php");
$produto = "";
$id = $_GET["id"];
$sql = "SELECT produto FROM produtos WHERE id=$id";
$result = $mysqli->query($sql);
if ($result && $result->num_rows > 0){
    $linha = $result->fetch_assoc();
    $produto = $linha['produto'];
}
$sql = "DELETE FROM produtos WHERE id=$id";
$result = $mysqli->query($sql);
registrar_log($mysqli, 'EXCLUIR', 'produtos', "$produto");
header("location: aplicativo.php");
exit;
?>
