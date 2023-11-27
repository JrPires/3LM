<?php
namespace app\controllers;

use app\models\CargoModel;

class CargoController
{
    private mysqli $conn;
    private $cargoModel;

    /**
     * @param mysqli $conn
     */
    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
        $this->cargoModel = new CargoModel($conn);
    }

    public function listarCargos() {
        return $this->cargoModel->listarCargos();
    }
}