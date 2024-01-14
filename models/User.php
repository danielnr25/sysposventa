<?php 
require_once 'Connection.php'; // Incluimos la clase conexion

// extends conexionBD para heredar los metodos de la clase conexionBD
class User extends conexionBD{

  function verificarUsuario($usuario, $contra){
    $c = conexionBD::conectarBD(); // Conectamos a la base de datos
    // Consulta para verificar si el usuario existe
    $sql = "SELECT us.*, pe.nombre as 'perfil' FROM usuario us INNER JOIN perfil pe ON us.idperfil = pe.idperfil WHERE us.estado = 1 AND us.usuario = :usuario AND us.clave = SHA1(:contra)";
    $params = array(':usuario' => $usuario, ':contra' => $contra); // Creamos un array con los parametros
    $query = $c->prepare($sql); // Preparamos la consulta
    $query->execute($params); // Ejecutamos la consulta
    return $query; // Retornamos el resultado de la consulta
    conexionBD::cerrarBD(); // Cerramos la conexion
  }
}


?>