<?php

use app\controllers\CargoController;

require_once 'controllers/CargoController.php';
require_once 'models/CargoModel.php';

$conn = new mysqli("127.0.0.1", "root", "", "cadastro_funcionarios");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$cargoController = new CargoController($conn);

$cargos = $cargoController->listarCargos();

require_once '../app/views/cargos/index.php';
?>
