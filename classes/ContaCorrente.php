<?php
include_once 'Conta.php';

class ContaCorrente extends Conta
{
    public $limite;

    function __construct($agencia, $codigo, $titular, $saldo, $limite)
    {
        parent::__construct($agencia, $codigo, $titular, $saldo);
        $this->limite = $limite;
    }
}