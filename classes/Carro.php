<?php

class Carro
{
    public $cor    = "Azul";
    public $modelo = "Gol";
    public $numeroDePortas = 2;
    public $velocidade = 0;

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