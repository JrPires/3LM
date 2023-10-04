<?php

class FuncionarioModel
{
    private mysqli $conn;

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function listarFuncionarios()
    {
        $sql = 'select 
                  f.id as id, 
                  f.nome as nome, 
                  f.sobrenome as sobrenome, 
                  c.nome as cargo, 
                  f.data_nascimento as data_nascimento, 
                  f.salario as salario 
                from 
                  funcionarios f 
                  right join cargos c on f.id_cargo = c.id 
                where 
                  f.id is not null';
        $result = $this->conn->query($sql);

        $funcionarios = [];
        while ($row = $result->fetch_assoc()) {
            $funcionarios[] = $row;
        }

        return $funcionarios;
    }

    public function inserirFuncionario($nome, $sobreNome, $idCargo, $dataNascimento, $salario)
    {

        $nome = $this->conn->real_escape_string($nome);
        $sobreNome = $this->conn->real_escape_string($sobreNome);
        $idCargo = (int)$idCargo;
        $dataNascimento = $this->conn->real_escape_string($dataNascimento);
        $salario = (float)$salario;

        $sql = "INSERT INTO funcionarios (
                  nome, sobrenome, id_cargo, data_nascimento, 
                  salario
                ) 
                VALUES 
                  (
                    '$nome', '$sobreNome', '$idCargo', 
                    '$dataNascimento', '$salario'
                  )";

        if ($this->conn->query($sql)) {
            if ($this->conn->affected_rows > 0) {
                return true;
            }
        }

        return false;
    }

    public function getFuncionarioPorId($id)
    {
        $sql = "SELECT * FROM funcionarios WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}