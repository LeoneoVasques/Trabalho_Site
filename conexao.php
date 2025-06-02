<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "banco_de_dados";

$mysqli = new mysqli($hostname, $usuario, $senha,);
$sql ="CREATE DATABASE IF NOT EXISTS banco_de_dados;";
$result = $mysqli->query($sql);
$sql = "USE banco_de_dados;";
$result = $mysqli->query($sql);
if ($mysqli->connect_errno) {   
    echo "falha ao conectar: (". $mysqli->connect_errno .") ". $mysqli->connect_error;
}
?>

<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "fornecedores";

$mysqli = new mysqli($hostname, $usuario, $senha,);
$sql ="CREATE DATABASE IF NOT EXISTS fornecedores;";
$result = $mysqli->query($sql);
$sql = "USE fornecedores;";
$result = $mysqli->query($sql);
if ($mysqli->connect_errno) {   
    echo "falha ao conectar: (". $mysqli->connect_errno .") ". $mysqli->connect_error;
}
?>

<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "relatorios";

$mysqli = new mysqli($hostname, $usuario, $senha,);
$sql ="CREATE DATABASE IF NOT EXISTS relatorios;";
$result = $mysqli->query($sql);
$sql = "USE relatorios;";
$result = $mysqli->query($sql);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (". $mysqli->connect_errno .") ". $mysqli->connect_error;

$logConn = new mysqli($logHost, $logUser, $logPass, $logDb);
function registrarLog($pagina, $bancoOrigem, $conteudo) {
    global $logConn;

    $pagina = $logConn->real_escape_string($pagina);
    $bancoOrigem = $logConn->real_escape_string($bancoOrigem);
    $conteudo = $logConn->real_escape_string($conteudo);

    $sql = "INSERT INTO logs (pagina, banco_origem, conteudo) VALUES ('$pagina', '$bancoOrigem', '$conteudo')";
    $logConn->query($sql);
}
}
?>



