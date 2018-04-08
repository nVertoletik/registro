<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Alta registro</title>
</head>
<body>
<?php
function validarValores($nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $correo, $password, $usuario){
	//TODO: Agregar validacion de regex
	return true;
}

include_once("conexion.php");

if(!empty($_POST['nombre'])){
	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}

if(!empty($_POST['apellidoPaterno'])){
	$apellidoPaterno = filter_var($_POST['apellidoPaterno'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}

if(!empty($_POST['apellidoMaterno'])){
	$apellidoMaterno = filter_var($_POST['apellidoMaterno'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}

if(!empty($_POST['telefono'])){
	$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}

if(!empty($_POST['correo'])){
	$correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
}

if(!empty($_POST['password'])){
	$password = md5($_POST['password']);
}

if(!empty($_POST['usuario'])){
	$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
echo "Nombre: ".$nombre."<br/>";
echo "Apellido Paterno: ".$apellidoPaterno."<br/>";
echo "Apellido Materno: ".$apellidoMaterno."<br/>";
echo "Telefono: ".$telefono."<br/>";
echo "Correo: ".$correo."<br/>";
echo "Usuario: ".$usuario."<br/>";
if(validarValores($nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $correo, $password, $usuario)){
	$registro = "insert into usuarios (nombre,apaterno,amaterno,telefono, correo, password, usuario) values('$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$correo', '$password', '$usuario')";
	$guarda_registro = consulta($registro);
	if($guarda_registro == false){
		echo "Datos ingresados de manera correcta";
	}
	else{
		echo "Hubo un error al intentar guardarel registro, intenta más tarde";
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
