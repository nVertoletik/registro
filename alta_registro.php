<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Alta registro</title>
</head>
<body>
<?php
include_once("conexion.php");

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
if(!empty($nombre)||!empty($correo)||!empty($apellidoMaterno)||!empty($apellidoPaterno)||!empty($telefono)){
	$comentario = "insert into usuarios (nombre,apaterno,amaterno,telefono, correo) values('$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$correo')";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "Gracias por dejar tu comentario, en caso de ser necesario nuestros colaboradores se pondrán en contacto contigo";
	}
	else{
		echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}
?>
</body>
</html>
