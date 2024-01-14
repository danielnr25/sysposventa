<?php 
require_once('../models/Menu.php');

controller($_POST['opcion']);

function controller($opcion){
  switch ($opcion) {
    case 'NUEVO':
      $resultado = array();
      try {
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];

        
      } catch (\Throwable $th) {
        //throw $th;
      }
      break;
    
    default:
      # code...
      break;
  }
}

?>