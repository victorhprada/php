<?php


final class cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP,[
         'options' => [
             'regexp' => '/ˆ[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$'
         ]
            ]);

        if($cpf ===false){
            echo "CPF inválido";
            exit();
        }
        $this->cpf = $cpf;
    }

    private function recuperaCpf(): string
    {
        return $this->cpf;
    }
}