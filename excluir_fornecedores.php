<?php
include("conexao.php");
include("log.php");
$fornecedor = "";
$id = $_GET["id"];
$sql = "SELECT fornecedor FROM fornecedores WHERE id=$id";
$result = $mysqli->query($sql);
if ($result && $result->num_rows > 0){
    $linha = $result->fetch_assoc();
    $fornecedor = $linha['fornecedor'];
}
$sql = "DELETE FROM fornecedores WHERE id=$id";
$result = $mysqli->query($sql);
registrar_log($mysqli, 'EXCLUIR', 'fornecedores', "$fornecedor");
header("location: fornecedores.php");
exit;
?>
