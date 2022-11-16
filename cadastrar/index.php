<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Metodo e Atributos</title>
</head>
<body>
  <?php

    require './Usuario.php';

    $usuario = new Usuario();
    $msg = $usuario->cadastrar("Paulo", 17, "paulo@gmail.com");
    echo $msg;
    
  ?>
</body>
</html>