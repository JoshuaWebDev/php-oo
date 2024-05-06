<?php

// declare(strict_types=1);

class Carro
{
    public $cor    = "Azul";
    public $modelo = "Gol";
    public $numeroDePortas = 2;
    public $velocidade = 0;
    public $marcha = 0;

    public function trocarMarcha($m) {
        $this->marcha = $m;
    }

    public function ligarMotor() {
        echo "Motor ligado!";
    }

    public function acelerar($v) {
        $this->velocidade += $v;
    }

    public function desacelerar($v) {
        $this->velocidade -= $v;
    }
}