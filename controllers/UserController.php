<?php

require_once('../models/User.php');
$accion = $_POST['accion'];
controller($accion);

function controller($accion)
{
  $objUsu = new User();

  switch ($accion) {
    case 'INICIAR_SESION':
      $usuario = $_POST['usuario'];
      $contra = $_POST['clave'];

      $datoUsuario = $objUsu->verificarUsuario($usuario, $contra);
      $resp = array();

      if ($datoUsuario->rowCount() > 0) {
        $datos = $datoUsuario->fetch(PDO::FETCH_NAMED);
        $_SESSION['idusuario'] = $datos['idusuario'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['idperfil'] = $datos['idperfil'];
        $_SESSION['perfil'] = $datos['perfil'];

        $resp['correcto'] = 1;
        $resp['mensaje'] = 'Usuario y Contraseña correcta';
      } else {
        $resp['correcto'] = 0;
        $resp['mensaje'] = 'Usuario o Contraseña incorrecta';
      }

      echo json_encode($resp);
      break;
  }
}
