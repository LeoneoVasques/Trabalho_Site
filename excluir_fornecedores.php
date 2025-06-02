<?php
include("conexao.php");
$id = $_GET["id"];
$sql = "DELETE FROM fornecedores WHERE id=$id";
$result = $mysqli->query($sql);
header("location: fornecedores.php");
exit;
?>
