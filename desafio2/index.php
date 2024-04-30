<?php
declare(strict_types=1);

include_once 'Funcionario.php';

$funcionario = new Funcionario("Maria", "F", "12/03/2004", 1234, "Estagiária");

echo "<b>Nome do(a) Colaborador(a):</b> {$funcionario->getNome()}<br>";
echo "<b>Sexo do(a) Colaborador(a):</b> {$funcionario->getSexo()}<br>";
echo "<b>Data de Nascimento do(a) Colaborador(a):</b> {$funcionario->getDataDeNascimento()}<br>";
echo "<b>Salario do(a) Colaborador(a):</b> {$funcionario->getSalario()}<br>";
echo "<b>Cargo do(a) Colaborador(a):</b> {$funcionario->getCargo()}<br>";

// var_dump($funcionario);

// $funcionario->setSalario();

// echo "<h2>Ficha do Funcionario: {$salario}</h2>";


