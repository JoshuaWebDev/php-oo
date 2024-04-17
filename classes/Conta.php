<?php
abstract class Conta
{
    public $agencia;
    public $codigo;
    public $titular;
    public $saldo;
    public $ativo;

    function __construct($agencia, $codigo, $titular, $saldo)
    {
        $this->agencia = $agencia;
        $this->codigo  = $codigo;
        $this->titular = $titular;
        $this->ativo   = false;
        $this->depositar($saldo);
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente!";
        }
    }
}