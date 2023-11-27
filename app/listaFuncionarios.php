<?php

use app\controllers\FuncionarioController;
use app\models\FuncionarioModel;

require_once '../app/models/FuncionarioModel.php';
require_once '../app/controllers/FuncionarioController.php';

$conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$funcionarioModel = new FuncionarioModel($conn);

$funcionarios = $funcionarioModel->listarFuncionarios();

require_once '../app/views/funcionarios/listar.php';
?>
