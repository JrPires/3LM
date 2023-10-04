<?php

use app\controllers\FuncionarioController;

require_once '../app/controllers/FuncionarioController.php';
require_once '../app/models/FuncionarioModel.php';

if (isset($_GET['id'])) {
    $funcionarioId = $_GET['id'];

    $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

    $funcionarioController = new FuncionarioController($conn);

    $funcionario = $funcionarioController->editarFuncionario($funcionarioId);


    if ($funcionario) {
        $id = $funcionario['id'];
        $nome = $funcionario['nome'];
        $sobrenome = $funcionario['sobrenome'];
        $cargo = $funcionario['cargo'];
        $dataNascimento = $funcionario['data_nascimento'];
        $salario = $funcionario['salario'];

        require_once '../app/views/funcionarios/editar.php';

    } else {
        echo 'Funcionário não encontrado.';
    }
} else {
    echo 'ID do funcionário não especificado.';
}
?>