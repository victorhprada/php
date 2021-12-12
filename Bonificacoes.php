<?php



$umFuncionario = new Funcionario(
    nome: 'Carlos',
    cpf: '091.472.659-57',
    salario: 2000);

$umaFuncionaria = new Funcionario(
    nome: 'Mariana',
    cpf: '095.345.713-01',
    salario: 10000
);

$controlador = new ControleBonificacao();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);

echo $controlador->getTotal();