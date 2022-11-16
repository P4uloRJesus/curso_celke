<?php 

class ChequeComum extends Cheque
{

  public function calcularJuro()
  {
    $valorComJuro = (0.20 * $this->valor) + $this->valor;
    //$valorConvReal = parent::converterReal($this->valor);
    $valorConvReal = $this->converterReal($valorComJuro);
    return "Valor do cheque {$this->tipo} sem juro R$ {$this->valor} e com juro R$ {$valorConvReal} <br>";
  }
}