<?php
namespace app\models;

class CargoModel
{
    private mysqli $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function listarCargos() {
        $sql = "SELECT * FROM cargos";
        $result = $this->conn->query($sql);

        $cargos = [];
        while ($row = $result->fetch_assoc()) {
            $cargos[] = $row;
        }

        return $cargos;
    }
}