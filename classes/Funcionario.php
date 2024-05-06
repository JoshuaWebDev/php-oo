<?php
class Funcionario
{
    private   $codigo;
    public    $nome;
    private   $dataDeNascimento;
    protected $salario;

    /**
     * Altera o valor de $codigo
     * @param float $valor 
     * @return void
     */
    public function setCodigo($valor)
    {
        $this->codigo = $valor;
    }

    /**
     * Exibe o valor de $codigo
     * @return float
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Altera o valor de $dataDeNascimento
     * @param float $valor 
     * @return void
     */
    public function setDataDeNascimento($valor)
    {
        $this->dataDeNascimento = $valor;
    }

    /**
     * Exibe o valor de $dataDeNascimento
     * @return float
     */
    public function getDataDeNascimento()
    {
        return $this->dataDeNascimento;
    }

    /**
     * Altera o valor de $salario
     * @param float $valor 
     * @return void
     */
    public function setSalario($valor)
    {
        if (is_numeric($valor) && $valor > 0) {
            $this->salario = $valor;
        } else {
            echo "<strong style='color:red'>Insira um valor numérico e positivo!</strong>";
        }
    }

    /**
     * Exibe o valor de $salario
     * @return float
     */
    public function getSalario()
    {
        return $this->salario;
    }
}