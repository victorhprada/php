<?php

class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.2;
    }

    public function Autenticar(): bool
    {
        return $senha = '123';
    }
}