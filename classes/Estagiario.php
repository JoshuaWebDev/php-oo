<?php
include_once 'Funcionario.php';

class Estagiario extends Funcionario
{
    public function getSalario()
    {
        return $this->salario * 1.12;
    }
}