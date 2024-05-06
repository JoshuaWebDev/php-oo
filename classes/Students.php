<?php

include_once "Person.php";

class Students extends Person
{
    public function getSalary()
    {
        return "Bolsa Estudante: R$ " . $this->salary;
    }
}