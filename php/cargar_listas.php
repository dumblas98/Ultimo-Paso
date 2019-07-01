<?php 
require_once 'conexion.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `tipo_articulo`';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_tipo]'>$row[nombre_tipo]</option>";
  }
  return $listas;
}

echo getListasRep();