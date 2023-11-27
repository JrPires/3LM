<?php
namespace app\controllers;

use app\models\FuncionarioModel;
use mysqli;

class FuncionarioController
{
    private FuncionarioModel $funcionarioModel;
    private mysqli $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->funcionarioModel = new FuncionarioModel($conn);
    }

//    public function listarFuncionarios() {
//        return $this->funcionarioModel->listarFuncionarios();
//    }

    public function editarFuncionario($id) {
        return $this->funcionarioModel->getFuncionarioPorId($id);
    }
}