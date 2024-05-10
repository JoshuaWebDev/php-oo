<?php

require_once "ParameterException.php";
require_once "FileNotFoundException.php";
require_once "FilePermissionException.php";

/**
 * @param string|null $file
 * @return string
 */
function openFile(string $file = null)
{
    // se o parâmetro $file não for informado
    // dispara esta Exception
    if (!$file) {
        throw new ParameterException("Falta informar o parâmetro com o nome do arquivo");
    }

    // se o parâmetro for informado mas o arquivo não existe
    // dispara esta Exception
    if (!file_exists($file)) {
        throw new FileNotFoundException("Arquivo não existente!");
    }

    // se não for possível abrir o arquivo
    // dispara esta Exception
    if (!$result = @file_get_contents($file)) {
        throw new FilePermissionException("Não foi possível ler o conteúdo deste arquivo!");
    }

    return $result;
}