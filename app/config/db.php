<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cadastro_funcionarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
