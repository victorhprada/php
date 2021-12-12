<?php

class Autenticador
{
    public function Login(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha))
        {
            echo 'Senha correta. Usuário loga no sistema';
        }else{
            echo 'Senha incorreta.';
        }
    }
}
