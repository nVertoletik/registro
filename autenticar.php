<?php
  include_once("conexion.php");
  
  $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
  $password = $_POST['password']; 
  $password = md5($password);
  
  $result = mysql_query("SELECT password FROM usuarios WHERE usuario = $usuario ");
  $row = mysql_fetch_array($result);
  
  if($row == $password){
  echo "True;"
  }
  else{
  echo "False"
  }
  
?>
