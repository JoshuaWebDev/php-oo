<?php

/**
 * @param string|null $file
 * @return string
 */
function openFile(string $file = null)
{
    // se o parâmetro $file não for informado
    // dispara esta Exception
    if (!$file) {
        throw new Exception("Falta informar o parâmetro com o nome do arquivo");
    }

    // se o parâmetro for informado mas o arquivo não existe
    // dispara esta Exception
    if (!file_exists($file)) {
        throw new Exception("Arquivo não existente!");
    }

    // se não for possível abrir o arquivo
    // dispara esta Exception
    if (!$result = @file_get_contents($file)) {
        throw new Exception("Não foi possível ler o conteúdo deste arquivo!");
    }

    return $result;
}

try {
    $arquivo = openFile("readme.txt");
    echo $arquivo;
} catch (Exception $e) {
    echo "Nome do arquivo: " . $e->getFile() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Mensagem de Erro: " . $e->getMessage() . "<br>";
}