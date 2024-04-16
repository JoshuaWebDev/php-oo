<?php
class Animal
{
    public $idade = 0;
    public $numeroDePatas = 4;

    function __construct($idade, $numeroDePatas)
    {
        $this->idade = $idade;
        $this->numeroDePatas = $numeroDePatas;
    }

    public function envelhecer()
    {
        $this->idade += 1;
    }
}