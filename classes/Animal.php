<?php
class Animal
{
    public $idade = 0;
    public $numeroDePatas = 4;

    public function envelhecer()
    {
        $this->idade += 1;
    }
}