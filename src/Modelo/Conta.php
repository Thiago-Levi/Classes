<?php
namespace Alura\Banco\Modelo;
require_once 'Titular.php';

Class Conta{
  
  private $titular;
  private float $saldo;
  private static $numeroDeContasInstanciadas = 0;



public function __construct(Titular $titular)
{
  
  $this->titular = $titular;
  $this->saldo = 0; 

  self::$numeroDeContasInstanciadas++;

}

  public function sacar($valor): void{
    if($valor > $this->saldo){
        echo"Saldo insufuciente!";
        return;
    }
    
    $this->saldo -= $valor;         
    
  }

  public function depositar($valor): void{
      if($valor < 0){
        echo"Valor precisa ser positivo";
        return;
        
      } 
      
      
      $this->saldo += $valor;
      
  }

  public function transferir($valor, Conta $contaDeDestino): void{
      if($valor > $this->saldo){
        echo "Saldo insuficiente";
        return;
      }

      if($valor <= 0){
          echo "Valor para tranferência é menor que zero. Erro!";
          return;
      }
      
      $this->sacar($valor);
      $contaDeDestino->depositar($valor);   
  }


  public static function quatidadeDeInstancias(): int{
    return self::$numeroDeContasInstanciadas;
  }

}

?>