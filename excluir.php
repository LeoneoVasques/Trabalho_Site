<?php
include("conexao.php");
$id = $_GET["id"];
$sql = "DELETE FROM produtos WHERE id=$id";
$result = $mysqli->query($sql);
header("location: aplicativo.php");
exit;
?>
