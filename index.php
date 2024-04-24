<?php

require_once "classes/Funcionario.php";

$pedro = new Funcionario();

$pedro->nome = "Pedro Pereira";
echo "Nome do Funcionário: " . $pedro->nome . "<br>";

// o código abaixo apresenta erro porque o atributo codigo é privado
// $pedro->codigo = '1234';
// echo "Código do Funcionário: " . $pedro->codigo . "<br>";

$pedro->setCodigo('45126');
echo "Código do Funcionário: " . $pedro->getCodigo() . "<br>";

$pedro->setDataDeNascimento('10/05/1989');
echo "Data de Nascimento: " . $pedro->getDataDeNascimento() . "<br>";

// o código abaixo apresenta erro porque o atributo salario é privado
// $pedro->salario = 1412.5;
// echo "Salário do Funcionário: " . $pedro->salario . "<br>";

$pedro->setSalario(1412.5);
echo "Salário do Funcionário: " . $pedro->getSalario() . "<br>";