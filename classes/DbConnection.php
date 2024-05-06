<?php

class DbConnection
{
    const DBNAME = "ALUNOS";

    private $password = "123#Mudar";

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}