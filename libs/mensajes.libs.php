<?php
$link=conectar();

function mostrarTodos($link) {
  $sql="SELECT * FROM mensajes order by id ";
  $resultado = mysqli_query($link, $sql);
  if ($resultado) {
     return $resultado;
    }
}
function mostrarPorId($link,$id){
  $sql="SELECT * FROM mensajes WHERE id=".$id;
  $resultado = mysqli_query($link, $sql);
  if ($resultado) {
     return $resultado;
    }
}
function agregarComentario($link,$datos){
  $datetime = date('Y-m-d h:i:s a', time());
  $sql='INSERT INTO mensajes(nombre, contenido, fecha, email) values ("'.$datos['user'] .'", "'.$datos['message'] .'", "'.$datetime .'","'.$datos['email'] .'") ';
  $resultado = mysqli_query($link, $sql);
  if ($resultado) { return 1; } else { return 0; }
}
?>
