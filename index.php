<?php

include_once 'classes/Passaro.php';

$canario = new Passaro(5, 2, true);

echo "Idade do pássaro: {$canario->idade}<br>";
echo "Quantidade de patas: {$canario->numeroDePatas}<br>";
echo "Pode voar? {$canario->mostrarSePodeVoar()}<br>";

echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro: {$canario->idade}<br>";
echo $canario->envelhecer();
echo "Idade do pássaro antes da morte: {$canario->idade}<br>";