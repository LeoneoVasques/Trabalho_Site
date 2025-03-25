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