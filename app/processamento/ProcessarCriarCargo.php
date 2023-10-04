<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST["descricao"];
    $nome = $_POST['nome'];

    $conn = new mysqli("localhost", "root", "", "cadastro_funcionarios");

    // Verifique a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cargos (descricao, nome) VALUES ('$descricao', '$nome')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../listaCargos.php");
        exit();
    } else {
        echo "Erro ao inserir o cargo: " . $conn->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
