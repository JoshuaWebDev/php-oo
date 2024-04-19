<?php

include_once 'classes/Person.php';
include_once 'classes/ContaPoupanca.php';
include_once 'classes/ContaCorrente.php';

$john = new Person('John Doe', 1412.5, 1988);
$mary = new Person('Mary Jane', 1500.1, 1990);

$cp1 = new ContaPoupanca('123', '1234', $john, 500, '2022-05-12');
$cp2 = new ContaPoupanca('123', '1235', $mary, 800, '2020-08-10');

echo "<h2>Informações de Conta Poupança Nº {$cp1->codigo}</h2>";

echo "<h3>Nome do Titular: {$cp1->titular->name}</h3>";

echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$cp1->mostrarSaldo()}<br>";

echo "<hr>";

echo "<h2>Informações de Conta Poupança Nº {$cp2->codigo}</h2>";

echo "<h3>Nome do Titular: {$cp2->titular->name}</h3>";

echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";