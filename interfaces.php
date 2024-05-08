<?php

require_once "classes/Aluno.php";
require_once "classes/Pessoa.php";

$chiquinha = new Aluno();
$madruga = new Pessoa("Seu Madruga");

$chiquinha->setNome("Chiquinha Madruga");

echo "Nome: " . $chiquinha->getNome() . "<br>";

$chiquinha->setResponsavel($madruga);

echo "Responsável: " . $chiquinha->getResponsavel() . "<br>";