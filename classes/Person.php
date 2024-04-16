<?php
class Person
{
    public $name;
    public $salary;
    public $yearOfBirth;

    // método construtor
    function __construct($name, $salary, $yearOfBirth)
    {
        $this->name        = $name;
        $this->salary      = $salary;
        $this->yearOfBirth = $yearOfBirth;
    }

    // método destrutor
    function __destruct()
    {
        echo "<br>Objeto {$this->name} finalizado";
    }
}