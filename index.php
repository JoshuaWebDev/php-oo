<?php

// require_once "classes/Person.php";
require_once "classes/Funcionario.php";
require_once "classes/Estagiario.php";
require_once "classes/Biblioteca.php";
require_once "classes/Aplicacao.php";

// $obj1 = new Biblioteca();
// $obj2 = new Biblioteca();

// echo "OBJ1: " . $obj1::NOME . "<br>";
// echo "OBJ2: " . $obj2::NOME . "<br>";

new Aplicacao('LibreOffice');
echo "<hr>";
new Aplicacao('Gimp');
echo "<hr>";
new Aplicacao('Inkscape');

// $josue = new Person();
// $josue->name;

// echo "Nome da Biblioteca: " . Biblioteca::NOME . "<br>";
// echo "Ambiente da Aplicação: " . Aplicacao::AMBIENTE . "<br>";
// echo "Versão da Aplicação: " . Aplicacao::VERSAO . "<br>";

// $john = new Person("John Doe", 5123.96, 2010);

// $pedro = new Funcionario();
// $pedrinho = new Estagiario();

// echo "Nome: {$john->name}";

// $pedrinho->setSalario(200);
// echo "Salário do Estagiário: " . $pedrinho->getSalario() . "<br>";

// $pedro->nome = "Pedro Pereira";
// echo "Nome do Funcionário: " . $pedro->nome . "<br>";

// // o código abaixo apresenta erro porque o atributo codigo é privado
// // $pedro->codigo = '1234';
// // echo "Código do Funcionário: " . $pedro->codigo . "<br>";

// $pedro->setCodigo('45126');
// echo "Código do Funcionário: " . $pedro->getCodigo() . "<br>";

// $pedro->setDataDeNascimento('10/05/1989');
// echo "Data de Nascimento: " . $pedro->getDataDeNascimento() . "<br>";

// // o código abaixo apresenta erro porque o atributo salario é privado
// // $pedro->salario = 1412.5;
// // echo "Salário do Funcionário: " . $pedro->salario . "<br>";

// $pedro->setSalario(1412.5);
// echo "Salário do Funcionário: " . $pedro->getSalario() . "<br>";