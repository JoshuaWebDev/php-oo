<?php

class Aplicacao extends Biblioteca
{
    // propriedade estática
    static $quantidade;
    const AMBIENTE = "MacOS Leopard";
    const VERSAO   = "3.8";

    function __construct($nome) {
        self::$quantidade++;
        $i = self::$quantidade;
        echo "Nova Aplicação nº $i: $nome<br>";
    }
}