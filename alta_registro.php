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

/*if(empty($nombre)){
	$nombre = filter_var($nombre, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
empty($apellidoPaterno);
empty($apellidoMaterno);
empty($telefono);

if(!empty($correo)){
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);;
}*/

echo "Nombre: ".$nombre."<br/>";
echo "Apellido Paterno: ".$apellidoPaterno."<br/>";
echo "Apellido Materno: ".$apellidoMaterno."<br/>";
echo "Telefono: ".$telefono."<br/>";
echo "Correo: ".$correo."<br/>";
if(!empty($nombre)||!empty($correo)||!empty($apellidoMaterno)||!empty($apellidoPaterno)||!empty($telefono)){
	$comentario = "insert into usuarios (nombre,apaterno,amaterno,telefono, correo) values('$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$correo')";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "Datos ingresados de manera correcta";
	}
	else{
		echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}
?>

<br/>
<a href="registro.php">Regresar al formulario</a>

</body>
</html>
