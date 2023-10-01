<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21338731_allisonrps"; // usuário do MySQL
$pass = "Aa123456?"; // senha do MySQL
$dbname = "id21338731_crudfatectest"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
