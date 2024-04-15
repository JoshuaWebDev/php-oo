<?php
include_once 'classes/Person.php';

$john = new Person('John', 1412.5, 1988);

echo "Nome: {$john->name}<br>";
echo "Salário: R$ " . number_format($john->salary, 2, ',', '.') ."<br>";
echo "Ano de Nascimento: {$john->yearOfBirth}<br>";

echo "<hr>";

$mary = new Person('Mary Jane', 1500.1, 1990);

echo "Nome: {$mary->name}<br>";
echo "Salário: R$ " . number_format($mary->salary, 2, ',', '.') ."<br>";
echo "Ano de Nascimento: {$mary->yearOfBirth}<br>";