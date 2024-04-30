<?php
 namespace Alura\Banco\Modelo;
  require_once 'Cpf.php';
  require_once 'Pessoa.php';
  require_once 'Endereco.php';
  
  
  class Titular extends Pessoa{
  
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
      $this->validaNomeTitular($nome);
      
      $this->cpf = $cpf;
      $this->nome = $nome;
      $this->endereco = $endereco;
      
    }

    public function getEndereco(){
      return $this->endereco;
    }

  
    
  }

?>