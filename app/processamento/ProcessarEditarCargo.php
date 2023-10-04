<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["descricao"])) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];

        $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "UPDATE cargos SET
            nome = '$nome',
            descricao = '$descricao'
            WHERE id = $id";

        if ($conn->query($sql) === TRUE) {

            header("Location: ../views/cargos/listaFuncionarios.php");
            exit();
        } else {
            echo "Erro ao atualizar o cargo: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "ID do cargo, nome ou descrição não especificados.";
    }
} else {
    echo "Acesso inválido.";
}
?>
