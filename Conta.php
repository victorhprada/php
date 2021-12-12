<?php

abstract class Conta
{
    private $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;
    

    public function __construct(Titular $titular)
    {
        $this->titular = $titular; 
        $this->saldo = 0;
        
        echo "Nova Conta Criada";

        self::$numeroDeContas++;
    }

    public function sacar(float $ValorASacar): void
    {
        
        $tarifaDeSaque = $ValorASacar * $this->percentualTarifa();
        $ValorASacar = $ValorASacar + $tarifaDeSaque;
        if($ValorASacar > $this->saldo){
            echo "Saldo Indisponível";
            return;
        }
            $this->saldo -= $ValorASacar;
        
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser maior que zero";
            return;
        }
            $this->saldo += $valorADepositar;
        
    }

    public function verSaldo(): float
    {
        return $this->saldo;
    }

    public function verCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function verNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
    
}    





