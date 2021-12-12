<?php

abstract class Funcionario extends Pessoa
{
    
    
    private float $salario;

    public function __construct(string $nome, string $cpf, float $salario)
    {
        parent::getCpf($cpf);
        parent::getNome($nome);
        
        $this->salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    protected function setNome($nome): void
    {
        $this->validaNomeTitular($nome);
        return $this->nome = $nome;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function AumentoSalario(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo 'Aumento tem que ser posistivo';
            return;
        }

        $this->salario += $valorAumento;
    }

}