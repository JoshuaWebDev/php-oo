<?php

require_once "classes/Carro.php";

// objeto gol que é instância da classe Carro
$gol = new Carro();

// listando os atributos do objeto gol
echo "Cor do Carro: " . $gol->cor . "<br>";
echo "Número de Portas: " . $gol->numeroDePortas . "<br>";
echo "Marcha do carro: " . $gol->marcha . "<br>";
echo "<hr>";

// alterando o número de portas
$gol->numeroDePortas = 4;
echo "Cor do Carro: " . $gol->cor . "<br>";
echo "Número de Portas: " . $gol->numeroDePortas . "<br>";
echo "Marcha do carro: " . $gol->marcha . "<br>";
echo "<hr>";

// invocando o método trocarMarcha a partir do objeto gol
$gol->trocarMarcha(1);
echo "Cor do Carro: " . $gol->cor . "<br>";
echo "Número de Portas: " . $gol->numeroDePortas . "<br>";
echo "Marcha do carro: " . $gol->marcha . "<br>";
echo "<hr>";

// invocando o método trocarMarcha a partir do objeto gol
$gol->trocarMarcha(2);
echo "Cor do Carro: " . $gol->cor . "<br>";
echo "Número de Portas: " . $gol->numeroDePortas . "<br>";
echo "Marcha do carro: " . $gol->marcha . "<br>";
echo "<hr>";