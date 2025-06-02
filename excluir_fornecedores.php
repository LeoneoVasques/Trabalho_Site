<?php
include("conexao.php");
include("log.php");
$id = $_GET["id"];
$sql = "DELETE FROM fornecedores WHERE id=$id";
$result = $mysqli->query($sql);
registrar_log($mysqli, 'EXCLUIR', 'fornecedores', "$fornecedor");
header("location: fornecedores.php");
exit;
?>
