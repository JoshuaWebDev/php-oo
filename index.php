<?php

include_once 'classes/Person.php';
include_once 'classes/ContaPoupanca.php';

$john = new Person('John Doe', 1412.5, 1988);
$mary = new Person('Mary Jane', 1500.1, 1990);

// $conta = new Conta('123', '1234', $john, 500);

$cp1 = new ContaPoupanca('123', '1234', $john, 500, '2024-01-01');
$cp2 = new ContaPoupanca('123', '1235', $mary, 800, '2024-01-01');

echo "Titular: {$cp1->titular->name}<br>";
echo "Salário do Titular: {$cp1->titular->salary}<br>";
echo "Agência: {$cp1->agencia}<br>";
echo "Número: {$cp1->codigo}<br>";
echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$cp1->mostrarSaldo()}<br>";
$saldoCp1 = $cp1->sacar(100);
echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$saldoCp1}<br>";
$cp1->depositar(1500);
echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$cp1->mostrarSaldo()}<br>";
$saldoCp1 = $cp1->sacar(2000);
echo "Saldo da Conta Poupança de {$cp1->titular->name}: {$saldoCp1}<br>";
echo "<hr>";
echo "Titular: {$cp2->titular->name}<br>";
echo "Salário do Titular: {$cp2->titular->salary}<br>";
echo "Agência: {$cp2->agencia}<br>";
echo "Número: {$cp2->codigo}<br>";
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";
$saldoCp2 = $cp2->sacar(500);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$saldoCp2}<br>";
$cp2->depositar(1200);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";
$saldoCp2 = $cp2->sacar(1500.1);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$saldoCp2}<br>";