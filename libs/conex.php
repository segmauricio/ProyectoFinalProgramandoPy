<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
date_default_timezone_set("America/Paraguay");

function conectar(){
  $server="localhost";     //127.0.0.1
  $usuario="root";
  $pass="";
  $bdatos="dw2_f1segovia";
  $enlace = mysqli_connect($server, $usuario, $pass, $bdatos);

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  } else {
    return $enlace;
  }

}
function desconectar($enlace)
{
mysqli_close($enlace);
}

?>
