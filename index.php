<?php

include_once 'classes/Person.php';
include_once 'classes/ContaPoupanca.php';
include_once 'classes/ContaCorrente.php';
include_once 'classes/ContaPoupancaEspecial.php';
include_once 'classes/ContaCorrenteEspecial.php';

$john = new Person('John Doe', 1412.5, 1988);
$mary = new Person('Mary Jane', 1500.1, 1990);

$cp1 = new ContaPoupanca('123', '1234', $john, 500, '2022-05-12');
$cp2 = new ContaPoupanca('123', '1235', $mary, 800, '2020-08-10');

$cc1 = new ContaCorrente('123', '1236', $john, 900, 1000);
$cc2 = new ContaCorrente('123', '1237', $mary, 900, 1000);

// $cpe = new ContaPoupancaEspecial('123', '1238', $john, 500, '2022-05-12');
// echo "Código da Conta Poupança Especial: " . $cpe->codigo;

// $cce = new ContaCorrenteEspecial('123', '1238', $mary, 800, 1200);
// echo $cce->codigo . "<br>";
// $cce->depositar(100);

echo "<h2>Informações de Conta Poupança Nº {$cp1->codigo}</h2>";

echo "<h3>Nome do Titular: {$cp1->titular->name}</h3>";

echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$cp1->mostrarSaldo()}<br>";
$cp1->sacar(100);
echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$cp1->mostrarSaldo()}<br>";

echo "<hr>";

echo "<h2>Informações de Conta Poupança Nº {$cp2->codigo}</h2>";

echo "<h3>Nome do Titular: {$cp2->titular->name}</h3>";

echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";
$cp2->sacar(200);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";

echo "<hr>";

echo "<h2>Informações de Conta Corrente Nº {$cc1->codigo}</h2>";

echo "<h3>Nome do Titular: {$cc1->titular->name}</h3>";

echo "Saldo da Conta Corrente de {$cc1->titular->name}: {$cc1->mostrarSaldo()}<br>";
$cc1->sacar(100);
echo "Saldo da Conta Corrente de {$cc1->titular->name}: {$cc1->mostrarSaldo()}<br>";

echo "<hr>";

echo "<h2>Informações de Conta Corrente Nº {$cc2->codigo}</h2>";

echo "<h3>Nome do Titular: {$cc2->titular->name}</h3>";

echo "Saldo da Conta Corrente de {$cc2->titular->name}: {$cc2->mostrarSaldo()}<br>";
$cc2->sacar(200);
echo "Saldo da Conta Corrente de {$cc2->titular->name}: {$cc2->mostrarSaldo()}<br>";