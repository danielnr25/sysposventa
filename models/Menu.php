<?php 
require_once('Connection.php');

class Menu extends conexionBD{
  
  function listarOpcionesMenu($idperfil){

    $c = conexionBD::conectarBD();
    $sql = "SELECT op.*, t3.descripcion as 'modulo', t3.icono as 'modulo_icono', t3.idopcion as 'idmodulo' FROM opcion op INNER JOIN acceso ac ON op.idopcion=ac.idopcion INNER JOIN opcion t3 ON op.idopcion_ref=t3.idopcion WHERE op.estado=1 AND ac.estado=1 AND ac.idperfil=:idperfil ORDER BY op.idopcion_ref ASC, op.idopcion ASC; ";
		$param = array(':idperfil'=>$idperfil);
    $query = $c->prepare($sql);
    $query->execute($param);
    return $query;
    conexionBD::cerrarBD();

  }


}

?>