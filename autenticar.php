<?php
  include_once("conexion.php");
  
  $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
  $password = $_POST['password']; 
  $password = md5($password);
  
  $result = consulta("SELECT password FROM usuarios WHERE usuario = '$usuario'");
  $row = $result;
  print_r($row);
  if($row[0]['password'] == $password){
  //TODO: Agregar lo que falta
  }
  else{
    //TODO:redireccionar
  }
  
?>
