<?php

interface IAluno
{
    public function getNome();
    public function setNome($nome);
    public function getResponsavel();
    public function setResponsavel(Pessoa $responsavel);
}

class Aluno implements IAluno
{
    private $nome;
    private $responsavel;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getResponsavel()
    {
        return $this->responsavel;
    }

    public function setResponsavel(Pessoa $responsavel)
    {
        $this->responsavel = $responsavel->getNome();
    }
}