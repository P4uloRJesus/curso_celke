<?php
class Usuario
{
  public $nome;
  public $idade;
  public $email;

  public function cadastrar($nome, $idade, $email)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->email = $email;
    
    return "O usuário <strong>{$this->nome}</strong> possui a idade <strong>{$this->idade}</strong> com o e-mail <strong>" . $this->email . "</strong>  foi cadastrado com sucesso !";
  }

}
?>
