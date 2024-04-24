<?php
class Funcionario
{
    private $codigo;
    public  $nome;
    private $dataDeNascimento;
    private $salario;

    /**
     * @param float $valor 
     * @return void
     */
    public function setSalario($valor)
    {
        if (is_numeric($valor) and $valor > 0) {
            $this->salario = $valor;
        }
    }

    /**
     * @return float
     */
    public function getSalario()
    {
        return $this->salario;
    }
}