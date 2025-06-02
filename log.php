<?php
$sql ="CREATE TABLE IF NOT EXISTS logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action VARCHAR(50) NOT NULL,
    table_name VARCHAR(50) NOT NULL,
    item VARCHAR(100) NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);";
$result = $mysqli->query($sql);

function registrar_log($mysqli, $acao, $tabela, $detalhes = null) {
    $acao = $mysqli->real_escape_string($acao);
    $tabela = $mysqli->real_escape_string($tabela);
    $item = $mysqli->real_escape_string($detalhes);
    $detalhes = $detalhes ? "'" . $mysqli->real_escape_string($detalhes) . "'" : "NULL";
    if (!$mysqli || !$acao || !$tabela || !$detalhes) {
        return false;
    }
    $sql = "INSERT INTO logs (action, table_name, item) 
            VALUES ('$acao', '$tabela', $detalhes)";
    
    $result = $mysqli->query($sql);
}
?>
