<?php


$endereco = new Endereco("Cidade 1", "Bairro 1", "Rua 1", "26");

$patricia = new Titular(new cpf("056.768.352-89"),"Patricia", $endereco,);
$segundaConta = new Conta($patricia);

$vinicius = new Titular(new cpf("091.472.659-57"),"Vinicius",$endereco);
$primeiraConta = new Conta($vinicius);