<?php

use app\models\FuncionarioModel;

require_once '../controllers/FuncionarioController.php';
require_once '../models/FuncionarioModel.php';
require_once '../entities/Funcionario.php';

    $conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");
    $funcionarioModel = new FuncionarioModel($conn);

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idCargo = $_POST['cargo'];
    $dataNascimento = $_POST['dataNascimento'];
    $salario = $_POST['salario'];

    $inseridoComSucesso = $funcionarioModel->inserirFuncionario($nome, $sobrenome, $idCargo, $dataNascimento, $salario);

    if ($inseridoComSucesso) {
        header("Location: ../listaFuncionarios.php");
        exit();
    } else {
        echo "Erro ao inserir funcionário.";
    }
?>
