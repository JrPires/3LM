<?php

class Cargo
{
    public int $id;
    public string $descricao;

    /**
     * @param int $id
     * @param string $descricao
     */
    public function __construct(int $id, string $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
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
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
}