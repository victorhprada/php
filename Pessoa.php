<?php

class Pessoa
{
    protected string $nome;
    protected string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->validaNomeTitular($cpf,$nome);
        $this->nome;
        $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    protected function validaNomeTitular(string $nomeTitular): void
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome da Titular precisa ter mais do que 5 caracteres";
        }
    }
}