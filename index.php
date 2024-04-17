<?php

include_once 'classes/Person.php';
include_once 'classes/ContaPoupanca.php';

$john = new Person('John Doe', 1412.5, 1988);
$mary = new Person('Mary Jane', 1500.1, 1990);

// $conta = new Conta('123', '1234', $john, 500);

$cp1 = new ContaPoupanca('123', '1234', $john, 500, '2024-01-01');
$cp2 = new ContaPoupanca('123', '1235', $mary, 800, '2024-01-01');

echo "Titular: {$cp1->titular->name}<br>";
echo "Agência: {$cp1->agencia}<br>";
echo "Número: {$cp1->codigo}<br>";
echo "Salário do Titular: {$cp1->titular->salary}<br>";
echo "<hr>";
echo "Titular: {$cp2->titular->name}<br>";
echo "Agência: {$cp2->agencia}<br>";
echo "Número: {$cp2->codigo}<br>";
echo "Salário do Titular: {$cp2->titular->salary}<br>";