<?php

class Titular extends Pessoa implements Autenticavel
{
    
    private Endereco $endereco;

    public function __construct(cpf $cpf,string $nome, Endereco $endereco)
    {
        parent::getCpf($cpf);
        parent::getNome($nome);
        $this->Endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}