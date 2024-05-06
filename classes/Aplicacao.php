<?php

class Aplicacao extends Biblioteca
{
    const AMBIENTE = "MacOS Leopard";
    const VERSAO   = "3.8";

    function __construct($nome) {
        echo "<b>Nome da Biblioteca: </b>" . parent::NOME . "<br>";
        echo "<b>Ambiente da Aplicação: </b>" . self::AMBIENTE . "<br>";
        echo "<b>Versão da Aplicação: </b>" . self::VERSAO . "<br>";
        echo "<b>Nome do parâmetro: </b>" . $nome . "<br>";
    }
}