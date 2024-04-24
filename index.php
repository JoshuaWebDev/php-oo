<?php

require_once "classes/Funcionario.php";

$pedro = new Funcionario();

$pedro->setSalario(1412.5);

echo "Salário: R$ " . number_format($pedro->getSalario(), '2', ',', '.');