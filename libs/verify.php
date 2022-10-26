<?php
if (isset($_POST['enviar'])) {
  $errores=[];
   if($_POST['user']==""){
      $error= 1;
      array_push($errores, "El campo de nombre de usuario no debe estar vacío");
    }
    if($_POST['email']==""){
      $error= 1;
      array_push($errores, "El campo de email no debe estar vacío");
    }
    if($_POST['message']==""){
      $error= 1;
      array_push($errores, "El campo de comentario no debe estar vacío");
    }
    if(($_POST['user']!="") && $_POST['email']!=""  && $_POST['message']!=""){
      $error=0;
    }
 }
?>
