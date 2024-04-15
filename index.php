<?php
include_once "classes/Cachorro.php";
include_once "classes/Peixe.php";

$toto = new Cachorro();
$toto->envelhecer();

echo "O cachorro tem " . $toto->numeroDePatas . " patas<br>";
echo "O cachorro tem " . $toto->idade . " ano<br>";

$toto->latir();
echo "<br>";

$pacu = new Peixe();

echo "O peixe tem " . $pacu->idade . " ano<br>";
$pacu->envelhecer();
echo "<br>";
echo "Agora o peixe tem " . $pacu->idade . " ano<br>";
echo "O peixe tem " . $pacu->numeroDePatas . " patas<br>";

$pacu->nadar();

$toto->latir();

echo "<br>";
$bicho = new Animal();
echo $bicho->numeroDePatas;
echo "<br>";
echo $bicho->idade;
$bicho->envelhecer();
echo "<br>";
echo $bicho->idade;

// $gol = new Carro();

// echo "Cor do carro: " . $gol->cor . "<br>";
// echo "Modelo do carro: " . $gol->modelo . "<br>";
// echo "Nº de portas: " . $gol->numeroDePortas . "<br>";
// echo "Velocidade: " . $gol->velocidade . "<br>";

// $gol->ligarMotor();
// $gol->acelerar(3);
// echo "<br>";
// echo "Velocidade: " . $gol->velocidade . "<br>";
// $gol->acelerar(5);
// echo "<br>";
// echo "Velocidade: " . $gol->velocidade . "<br>";
// $gol->desacelerar(1);
// echo "<br>";
// echo "Velocidade: " . $gol->velocidade . "<br>";
// $gol->desacelerar(4);
// echo "<br>";
// echo "Velocidade: " . $gol->velocidade . "<br>";
// echo "<hr>";

// $gol->cor = "Vermelho";
// $gol->modelo = "HB20";
// $gol->numeroDePortas = 4;
// echo "Cor do carro: " . $gol->cor . "<br>";
// echo "Modelo do carro: " . $gol->modelo . "<br>";
// echo "Nº de portas: " . $gol->numeroDePortas . "<br>";
