<?php

namespace src;

class Endereco{
  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;
  
  
  public function __construct(string $cidade, string $bairro, string $rua, string $numero)
  { 
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
    
  }

  public function getCidade(){
    return $this->cidade;
  }

  public function setCidade(string $cidade): void {
    $this->cidade = $cidade;
  }

  public function getBairro(){
    return $this->bairro;
  }

  public function setBairro(string $bairro): void {
    $this->bairro = $bairro;
  }

  public function getRua(){
    return $this->rua;
  }

  public function setRua(string $rua): void {
    $this->rua = $rua;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero(string $numero): void {
    $this->numero = $numero;
  }


}

?>
