<?php
include_once 'Conta.php';

class ContaPoupanca extends Conta
{
    public $aniversario;

    function __construct($agencia, $codigo, $titular, $saldo, $aniversario)
    {
        parent::__construct($agencia, $codigo, $titular, $saldo);
        $this->aniversario = $aniversario;
    }
}