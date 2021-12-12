<?php

class Desenvolvedor extends Funcionario
{
    public function Promocao()
    {
        $this->AumentoSalario($this->getSalario() * 0.75);
    }


    
}