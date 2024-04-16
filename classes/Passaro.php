<?php
include_once 'Animal.php';

class Passaro extends Animal
{
    public $podeVoar = true;

    function __construct($idade, $numeroDePatas, $podeVoar)
    {
        parent::__construct($idade, $numeroDePatas);
        $this->podeVoar = $podeVoar;
    }

    public function envelhecer()
    {
        if ($this->idade <= 10) {
            parent::envelhecer();
        } else {
            echo "O passaro morreu<br>";
        }
    }

    public function mostrarSePodeVoar()
    {
        if ($this->podeVoar) {
            return "Sim";
        } else {
            return "Não";
        }
    }
}