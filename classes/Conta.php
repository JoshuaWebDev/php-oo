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

    // assinatura do método abstrato
    // NÃO DEVE SER IMPLEMENTADA A LÓGICA (CORPO DA FUNÇÃO)
    // EM UM MÉTODO ABSTRATO NA SUA ASSINATURA
    abstract function transferir($conta, $valor);

    /**
     * @param float $valor
     * @return void
     */
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    /**
     * @param float $valor
     * @return string|float
     */
    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            return $this->saldo;
        } else {
            return "Saldo insuficiente! Você tentou sacar {$valor} mas só tem {$this->saldo}";
        }
    }

    /**
     * @return float
     */
    public function mostrarSaldo()
    {
        return $this->saldo;
    }
}