<?php
include_once 'Conta.php';

final class ContaPoupanca extends Conta
{
    public $aniversario;

    function __construct($agencia, $codigo, $titular, $saldo, $aniversario)
    {
        parent::__construct($agencia, $codigo, $titular, $saldo);
        $this->aniversario = $aniversario;
    }

    /**
     * @param float $valor
     * @return float|bool
     */
    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            parent::sacar($valor);
        } else {
            echo "Não foi possível efetuar o saque!";
            return false;
        }
    }

    public function transferir($conta, $valor)
    {
        if ($this->sacar($valor)) {
            $conta->depositar($valor);
        }
    }
}