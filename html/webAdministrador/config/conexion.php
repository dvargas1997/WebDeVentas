 <?php 
  class Conexion extends mysqli{
      
      private $host = 'localhost';
      private $user = 'root';
      private $pass = '';
      private $dbname = 'web_de_ventas';
      
      public function __construct(){
          parent:: __construct($this->host,$this->user,$this->pass,$this->dbname);
          $this->set_charset('utf-8');
          
          $this->connect_errno ? die('error al conectar a su DB, por favor ponte en contacto con el administrador'.mysqli_connect_errno()) : $m = 'conectado a la db';
          
          echo $m;
          
      }
  }