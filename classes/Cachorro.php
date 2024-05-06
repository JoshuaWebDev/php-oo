<?php
include "Animal.php";

class Cachorro extends Animal
{
    public function latir()
    {
        echo "Au au";
    }
}