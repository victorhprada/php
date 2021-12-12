<?php

class ControleBonificacao
{
    private int $totalBonificacao;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacao;
    }
}