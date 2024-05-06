<?php

require_once "classes/Person.php";
require_once "classes/Students.php";

$john = new Person("John Doe", 2500.75, 2010);
$mary = new Students("Mary Jane", 2500.75, 2010);

echo "Nome: " . $john->name . "<br>";
echo "Salário: " . $john->getSalary() . "<br>";
echo "Ano de Nascimento: " . $john->getyearOfBirth() . "<br>";
echo "<hr>";

$john->setSalary(3100.5);

echo "Nome: " . $john->name . "<br>";
echo "Salário: " . $john->getSalary() . "<br>";
echo "Ano de Nascimento: " . $john->getyearOfBirth() . "<br>";
echo "<hr>";

echo "Nome: " . $mary->name . "<br>";
echo "Salário: " . $mary->getSalary() . "<br>";
echo "Ano de Nascimento: " . $mary->getyearOfBirth() . "<br>";
echo "<hr>";