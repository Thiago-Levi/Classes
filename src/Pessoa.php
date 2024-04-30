<?php

namespace src;
require_once 'Cpf.php';

  class Pessoa{
    public string $nome;
    public Cpf $cpf;


    public function __construct(string $nome, Cpf $cpf)
    {
      $this->nome = $nome;
      $this->cpf = $cpf;

    }

    public function getNome(): string {
      return $this->nome;
    }

    public function setNome(string $nome){
      $this->nome = $nome;
    }

    public function getCpf(): Cpf {
      return $this->cpf;
    }
    
    public function setCpf(string $cpf){
      $this->cpf = $cpf;
    }


    public function validaNomeTitular($nomeTitular):void{
      if(strlen($nomeTitular) < 5){
        echo"Nome inválido!";
        exit();
      }
    }

  }

?>