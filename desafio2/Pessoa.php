<?php
declare(strict_types=1);
class Pessoa
{
    protected $nome;
    protected $sexo;
    protected $dataDeNascimento;

    function __construct($nome, $sexo, $dataDeNascimento)
    {
        $this->nome             = $nome;
        $this->sexo             = $sexo;
        $this->dataDeNascimento = $dataDeNascimento;
    }

    /**
     * atribui $valor ao atributo $salario
     * @param float $nome
     * @return void
     */
    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    /**
     * exibe o valor do atributo $nome
     * @return string
     */
    public function getNome() : string
    {
        return $this->nome;
    }

    public function setSexo(string $sexo) : void
    {
        $this->nome = $sexo;
    }

    public function getSexo() : string
    {
        return $this->sexo;
    }

    public function setDataDeNascimento(string $dataDeNascimento) : void
    {
        $this->dataDeNascimento = $dataDeNascimento;
    }

    public function getDataDeNascimento() : string
    {
        return $this->dataDeNascimento;
    }
}