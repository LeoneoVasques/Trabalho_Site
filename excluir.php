<?php
include("conexao.php");
include("log.php");
$produto = "";
$id = $_GET["id"];
$sql = "DELETE FROM produtos WHERE id=$id";
$result = $mysqli->query($sql);
registrar_log($mysqli, 'EXCLUIR', 'produtos', 'excluir.php?id=$row[id]');
header("location: aplicativo.php");
exit;
?>
