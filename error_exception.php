<?php

require_once "functions/openFile.php";

try {
    $arquivo = openFile();
    echo $arquivo;
} catch (ParameterException $e) {
    echo "<b>Código: </b>" . $e->getMyCode() . "<br>";
} catch (FileNotFoundException $e) {
    var_dump($e->getTrace());
    echo "finalizando a aplicação...";
    die;
} catch (Exception $e) {
    echo "<b>Nome do arquivo: </b>" . $e->getFile() . "<br>";
    echo "<b>Linha: </b>" . $e->getLine() . "<br>";
    echo "<b>Código: </b>" . $e->getCode() . "<br>";
    echo "<b>Mensagem de Erro: </b>" . $e->getMessage() . "<br>";
}