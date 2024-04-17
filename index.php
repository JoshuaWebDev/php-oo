<?php

include_once 'classes/Person.php';
include_once 'classes/Conta.php';

$john = new Person('John Doe', 1412.5, 1988);

$conta = new Conta('123', '1234', $john, 500);

echo "Agência: {$conta->agencia}";
echo "Número: {$conta->codigo}";
echo "Titular: {$conta->titular->name}";
echo "Salário do Titular: {$conta->titular->salary}";