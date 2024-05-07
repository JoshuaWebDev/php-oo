<?php

require_once "classes/Biblioteca.php";
require_once "classes/Aplicacao.php";

echo "Informações Sobre a Aplicação:<br>";
echo "=================================================<br>";
Aplicacao::sobre();

// new Aplicacao('LibreOffice');
// echo "<hr>";
// new Aplicacao('Gimp');
// echo "<hr>";
// new Aplicacao('Inkscape');
// echo "<hr>";
// new Aplicacao('Dia');
// echo "<hr>";
// new Aplicacao('Abiword');
// echo "<hr>";
// new Aplicacao('Evolution');
// echo "<hr>";
// echo "Quantidade de Aplicações = " . Aplicacao::$quantidade . "\n";