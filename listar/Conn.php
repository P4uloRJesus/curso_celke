<?php

class Conn
{
   public $host = "localhost";
   public $user = "root";
   public $pass = "";
   public $dbname = "curso_celke";
   public $connect = null;

   public function conectar()
   {
      try {
         //conexão sem a porta
         $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);

         echo "Conexão realizada com sucesso!";
         return $this->connect;
      } catch (Exception $err) {
         echo "Erro: Conexão não realizada com sucesso!";
         return false;
      }
   }
}
