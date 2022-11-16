<?php

 //classe pai
class Cliente
{
  //Atributos
  public $logradouro;
  public $bairro;

  //Métedo 
  public function verEndereco()
  {
    return "<p>Endereço: {$this->logradouro}<br></p>Bairro: {$this->bairro}";
  }
  


}
?>