<?php
include_once 'Conta.php';

class ContaCorrente extends Conta
{
    public $limite;
    public $taxaDeTransferencia = 2.5;

    function __construct($agencia, $codigo, $titular, $saldo, $limite)
    {
        parent::__construct($agencia, $codigo, $titular, $saldo);
        $this->limite = $limite;
    }

    /**
     * @param float $valor
     * @return float|bool
     */
    public function sacar($valor)
    {
        $taxa = 0.05;
        if ($this->saldo + $this->limite >= $valor) {
            parent::sacar($valor);         // subrai o valor do saldo
            parent::sacar($valor * $taxa); // subrai a taxa de saldo
        } else {
            echo "Não foi possível efetuar o saque!";
            return false;
        }
    }

    final function transferir($conta, $valor)
    {
        if ($this->sacar($valor)) {
            $conta->depositar($valor);
        }

        if ($this->titular != $conta->titular) {
            $conta->sacar($this->taxaDeTransferencia);
        }
    }
}