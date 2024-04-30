<?php
declare(strict_types=1);

include_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    private $salario;
    private $cargo;

    /**
     * método construtor que instacia...
     *
     * @param string $nome
     * @param string $sexo
     * @param string $dataDeNascimento
     * @param float  $salario
     * @param string $cargo
     */
    function __construct($nome, $sexo, $dataDeNascimento, $salario, $cargo)
    {
        parent::__construct($nome, $sexo, $dataDeNascimento);

        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->salario = $salario;
        $this->cargo = $cargo;

    }

    /**
     * atribui $valor ao atributo $salario
     * @param float $salario
     * @return void
     */
    public function setSalario($valor) : void
    {
        $this->salario = $valor;
    }

    /**
     * exibe o valor de $salario
     * @return float
     */
    public function getSalario() : float
    {
        return $this->salario;
    }

    /**
     * atribui o valor do parâmetro $cargo ao atributo $cargo
     * @param float $salario
     * @return void
     */
    public function setCargo($cargo) : void
    {
        $this->cargo = $cargo;
    }

    /**
     * exibe o valor do atributo $cargo
     * @return string
     */
    public function getCargo() : string
    {
        return $this->cargo;
    }
}