<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Classe abstrata</title>
</head>
<body>
  <?php

  require './Cheque.php';
  require './ChequeComum.php';
  require './ChequeEspecial.php';

  //A classe abstrata não pode ser instanciada
  /* $cheque = new Cheque(207.27, "comum");
  $msg = $cheque->verValor();
  echo $msg;
 */
  $chequeComum = new ChequeComum(307.37, "comum");
  $msgChequeComum = $chequeComum->calcularJuro();
  echo $msgChequeComum;

  $chequeEspecial = new ChequeEspecial(407.47, 'Especial');
  $msgChequeEspecial = $chequeEspecial->calcularJuro();
  echo $msgChequeEspecial;

  ?>
  
</body>
</html>