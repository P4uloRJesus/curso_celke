<?php

class ClientePessoaJuridica extends Cliente 
{
  public $nomeFantasia;
  public $cnpj;

  public function verInformacaoEmpresa()
  {
    $dados = "Endereço da pessoa juridica<br>";
    $dados .= "Endereço: {$this->logradouro}<br>";
    $dados .= "Bairro: {$this->bairro}<br>";
    $dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
    $dados .= "CNPJ: {$this->cnpj}<br>";
    
    return "<p>$dados</p>";
  }
}