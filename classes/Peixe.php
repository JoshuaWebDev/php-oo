<?php
include_once "Animal.php";

class Peixe extends Animal
{
    public $numeroDePatas = 0;

    public function nadar()
    {
        echo "o peixe está nadando...";
    }
}