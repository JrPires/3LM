<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "DELETE FROM cargos WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../listaCargos.php");
            exit();
        } else {
            echo "Erro ao excluir o cargo: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "ID do cargo não especificado.";
    }
} else {
    echo "Acesso inválido.";
}
?>
