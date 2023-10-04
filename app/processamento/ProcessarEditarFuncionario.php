<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["id"]) &&
        isset($_POST["nome"]) &&
        isset($_POST["sobrenome"]) &&
        isset($_POST["cargo"]) &&
        isset($_POST["data_nascimento"]) &&
        isset($_POST["salario"])
    ) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cargo = 1;
        $dataNascimento = $_POST["data_nascimento"];
        $salario = $_POST["salario"];

        $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "UPDATE funcionarios SET
            nome = '$nome',
            sobrenome = '$sobrenome',
            cargo = '$cargo',
            data_nascimento = '$dataNascimento',
            salario = $salario
            WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../listaFuncionarios.php");
            exit();
        } else {
            echo "Erro ao atualizar o funcionário: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Todos os campos são obrigatórios.";
    }
} else {
    echo "Acesso inválido.";
}
?>
