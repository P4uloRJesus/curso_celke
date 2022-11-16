<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Listar</title>
</head>

<body>
  <?php
  //inclui o arquivo 
  require './Usuarios.php';

  //Instaciando a classe 
  //Criando o objeto $listarUsuarios
  $listarUsuario = new Usuarios();
  //instanciar o metodo listar 
  $result_usuarios = $listarUsuario->listar();

  foreach ($result_usuarios as $row_usuarios) {
    //var_dump($row_usuarios);
    extract($row_usuarios);
    echo "Id do usuário $id <br>";
    echo "Nome do usuário $nome <br>";
    echo "E-mail do usuário $email <br>";

  }

  ?>
</body>

</html>