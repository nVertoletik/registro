<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Guarda comentario</title>
</head>
<body>
<?php
include_once("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];
if(!empty($nombre)||!empty($correo)||!empty($comentario)){
	$comentario = "insert into comentarios (nombre,correo,comentario) values('$nombre','$correo','$comentario')";
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
