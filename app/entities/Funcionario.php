<?php
namespace app\entities;

use DateTime;

class Funcionario
{
    public int $id;
    public String $nome;
    public String $sobreNome;
    public DateTime $dataNascimento;
    public int $idCargo;
    public float $salario;

    /**
     * @param int $id
     * @param String $nome
     * @param String $sobreNome
     * @param DateTime $dataNascimento
     * @param int $idCargo
     * @param float $salario
     */
    public function __construct(
        int $id,
        string $nome,
        string $sobreNome,
        DateTime $dataNascimento,
        int $idCargo,
        float $salario
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->dataNascimento = $dataNascimento;
        $this->idCargo = $idCargo;
        $this->salario = $salario;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param String $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return String
     */
    public function getSobreNome(): string
    {
        return $this->sobreNome;
    }

    /**
     * @param String $sobreNome
     */
    public function setSobreNome(string $sobreNome): void
    {
        $this->sobreNome = $sobreNome;
    }

    /**
     * @return DateTime
     */
    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    /**
     * @param DateTime $dataNascimento
     */
    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return int
     */
    public function getIdCargo(): int
    {
        return $this->idCargo;
    }

    /**
     * @param int $idCargo
     */
    public function setIdCargo(int $idCargo): void
    {
        $this->idCargo = $idCargo;
    }

    /**
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * @param float $salario
     */
    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }
}