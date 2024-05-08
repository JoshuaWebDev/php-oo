<?php

interface IAluno
{
    public function getNome();
    public function setNome($nome);
    public function getResponsavel();
    public function setResponsavel(Pessoa $responsavel);
}