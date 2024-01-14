<?php 

session_start();
if (!isset($_SESSION['idusuario'])) {
  if ($_POST['accion'] != 'INICIAR_SESION') {
    header('Location: index.php');
  }
}

class conexionBD
{
  // Atributos necesarios para la conexion
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $bd = "posventa";
  private $pdo;

  // Metodo para conectarse a la base de datos
  public function conectarBD(){
    
    // try - catch para capturar errores de conexion a la base de datos
    try {
      // PDO es una libreria de php para conectarse a la base de datos
      $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->password); // Creamos la conexion
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Para que muestre los errores
      $this->pdo->exec("SET NAMES 'UTF8'"); // Para que se muestren las tildes y caracteres especiales
      //echo "Conectado a la base de datos"; // Mensaje de conexion exitosa
      return $this->pdo; // Retornamos la conexion
    } catch (PDOException $e) {
      echo "Error de conexion a la base de datos: " . $e->getMessage(); // Mensaje de error
    }
  }

  function cerrarBD()
  {
    $this->pdo = null;
  }
}

// verificamos que se haya enviado algo por el metodo post
// $obj = new conexionBD();
// $obj->conectarBD();



?>