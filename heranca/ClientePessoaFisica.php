<?php
//classe filha herdando a classe pai
class ClientePessoaFisica extends Cliente
{
  //Atributos
  public $nome;
  public $cpf;

  //Métedo
  public function verInformarcaoUsuario()
  {
    $dados = "Endereço da pessoa física<br>";
    $dados .= "Endereço: {$this->logradouro}'<br>";
    $dados .= "Bairro: {$this->bairro}<br>";
    $dados .= "Nome: {$this->nome}<br>";
    $dados .= "CPF: {$this->cpf}<br>";
    
    return  "<p>$dados</p>"; 
  }


}