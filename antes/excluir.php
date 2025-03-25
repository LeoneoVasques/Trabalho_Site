<?php
include("conexao.php");
$id = $_GET["id"];
$sql = "DELETE FROM usuarios WHERE id=$id";
$result = $mysqli->query($sql);
header("location: index.php");
exit;

?>