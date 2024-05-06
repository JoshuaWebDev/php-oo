<?php
class Person
{
    public $name;
    protected $salary;
    private $yearOfBirth;

    // método construtor
    function __construct($name, $salary, $yearOfBirth)
    {
        $this->name        = $name;
        $this->salary      = $salary;
        $this->yearOfBirth = $yearOfBirth;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    public function setYearOfBirth($year)
    {
        $this->yearOfBirth = $year;
    }

    private public formatSalary()
    {
        $salary = number_format($this->salary, 2, ",", ".");
        return $salary;
    }

    // método destrutor
    // function __destruct()
    // {
    //     echo "<br>Objeto {$this->name} finalizado";
    // }
}