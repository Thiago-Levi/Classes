<?php

namespace src;
require_once 'autoload.php';
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Cpf;

// $minhaContaA = new Conta(
//   new Titular(new Cpf("0283449950"), "Thiago Levi",
//    new Endereco("Maracanaú", "Novo Maracanaú", "18", "121")));

// $minhaContaB = new Conta(new Titular(new Cpf("1283449950"), "Maria", new Endereco("Maracanaú", "Novo Maracanaú", "18", "121")));


// $minhaContaA->depositar(1000);
// $minhaContaB->depositar(2000);

//$minhaContaA->transferir(-1, $minhaContaB);

// var_dump($minhaContaA);
// var_dump($minhaContaB);

// $quantidadeDeContas =  Conta::quatidadeDeInstancias();

// echo($quantidadeDeContas);


$funcionario = new Funcionario("Levi Costa", new Cpf("02836544765976"),"Desenvolvedor");
var_dump($funcionario);




?>