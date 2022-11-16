<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Heranca</title>
</head>
<body>
    
  <?php
    require './Cliente.php';
    require './ClientePessoaFisica.php';
    require './ClientePessoaJuridica.php';

    //Objeto
    $cliente = new Cliente();
    $cliente->logradouro = "Brasília - A";
    $cliente->bairro = "Águas Claras";
    $msg = $cliente->verEndereco();
    echo $msg;
    echo "<hr>";

    $clientePF = new ClientePessoaFisica();
    $clientePF->logradouro = "Brasília - B";
    $clientePF->bairro = "Águas Claras";
    $clientePF->nome = "Paulo";
    $clientePF->cpf = 12345678912;
    $msgPF = $clientePF->verInformarcaoUsuario();
    echo "$msgPF";
    echo "<hr>";

    $clientePj = new ClientePessoaJuridica();
    $clientePj->logradouro = "Brasília - C";
    $clientePj->bairro = "Águas Claras";
    $clientePj->nomeFantasia= "IPAC";
    $clientePj->cnpj = 12345678912345;
    $msgPj = $clientePj->verInformacaoEmpresa();
    echo "$msgPj";
    echo "<hr>";


  

  ?>
</body>
</html>
