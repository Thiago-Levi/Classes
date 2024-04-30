<?php

namespace src;
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';
require_once 'src/Cpf.php';
require_once 'src/Funcionario.php';

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