<?php

class ChequeEspecial extends Cheque
{
  
  public function calcularJuro()
  {
    $valorComJuro = (0.40 * $this->valor) + $this->valor;
    $valorConvReal = $this->converterReal($valorComJuro);
    return "Valor do cheque {$this->tipo} sem juro R$ {$this->converterReal($this->valor)} e com juro R$ {$valorConvReal} <br>";
  }
}