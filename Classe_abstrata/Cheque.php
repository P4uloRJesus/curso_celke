<?php

abstract class Cheque 
{
  public $valor;
  public $tipo;

  public function __construct($valor, $tipo)
  {
    $this->valor = $valor;
    $this->tipo = $tipo;
  }

  /* public function verValor ()
  {
    return "Valor do cheque " . $this->tipo . " é R$ {$this->valor}<br>";
  } */

  public function converterReal($valor)
  {
    return number_format($valor, '2', ',', '.');
  }
}