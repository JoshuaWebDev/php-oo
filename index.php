<?php

include_once 'classes/Person.php';
include_once 'classes/ContaPoupanca.php';
include_once 'classes/ContaCorrente.php';

$john = new Person('John Doe', 1412.5, 1988);
$mary = new Person('Mary Jane', 1500.1, 1990);

// $conta = new Conta('123', '1234', $john, 500);

$cp1 = new ContaPoupanca('123', '1234', $john, 500, '2022-05-12');
$cp2 = new ContaPoupanca('123', '1235', $mary, 800, '2020-08-10');

echo "<h2>Informações de Conta Poupança</h2>";

echo "Titular: {$cp1->titular->name}<br>";
echo "Salário do Titular: {$cp1->titular->salary}<br>";
echo "Data de Abertura da conta: {$cp1->aniversario}<br>";
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
echo "Data de Abertura da conta: {$cp2->aniversario}<br>";
echo "Agência: {$cp2->agencia}<br>";
echo "Número: {$cp2->codigo}<br>";
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";
$saldoCp2 = $cp2->sacar(500);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$saldoCp2}<br>";
$cp2->depositar(1200);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$cp2->mostrarSaldo()}<br>";
$saldoCp2 = $cp2->sacar(1500.1);
echo "Saldo da Conta Poupança de {$cp2->titular->name}: {$saldoCp2}<br>";

echo "<hr>";

echo "<h2>Informações de Conta Corrente</h2>";

$cc1 = new ContaCorrente('123', '1236', $john, 600, 900);
$cc2 = new ContaCorrente('123', '1237', $mary, 900, 1200);

echo "Titular: {$cc1->titular->name}<br>";
echo "Salário do Titular: {$cc1->titular->salary}<br>";
echo "Limite de transação diária: {$cc1->limite}<br>";
echo "Agência: {$cc1->agencia}<br>";
echo "Número: {$cc1->codigo}<br>";
echo "Saldo da Conta Poupança de {$cc1->titular->name}: {$cc1->mostrarSaldo()}<br>";
$cc1->depositar(1000);
echo "Saldo da Conta Poupança de {$cc1->titular->name}: {$cc1->mostrarSaldo()}<br>";
$saldoCc1 = $cc1->sacar(1200);
echo "Saldo da Conta Poupança de {$cc1->titular->name}: {$saldoCc1}<br>";
$saldoCc1 = $cc1->sacar(500);
echo "Saldo da Conta Poupança de {$cc1->titular->name}: {$saldoCc1}<br>";

echo "<hr>";

echo "Titular: {$cc2->titular->name}<br>";
echo "Salário do Titular: {$cc2->titular->salary}<br>";
echo "Limite de transação diária: {$cc2->limite}<br>";
echo "Agência: {$cc2->agencia}<br>";
echo "Número: {$cc2->codigo}<br>";
echo "Saldo da Conta Poupança de {$cc2->titular->name}: {$cc2->mostrarSaldo()}<br>";
$cc2->depositar(900);
echo "Saldo da Conta Poupança de {$cc2->titular->name}: {$cc2->mostrarSaldo()}<br>";
$saldoCc2 = $cc2->sacar(1500);
echo "Saldo da Conta Poupança de {$cc2->titular->name}: {$saldoCc2}<br>";
$saldoCc2 = $cc2->sacar(500);
echo "Saldo da Conta Poupança de {$cc2->titular->name}: {$saldoCc2}<br>";