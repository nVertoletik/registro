<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Registro de usuarios</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/registro.css">
</head>

<body class="rgba-primary-4">
	<h2>Registro de usuarios</h2>
	<p>
		Para registrar un usuario completa el formulario con los datos que se solicitan y al finalizar presiona el boton de "enviar"
	</p>
	
	<form action="alta_registro.php" method="post">
		<div class="rgba-primary-3">
		Nombre:<br/>
		<input type="text" name="nombre"><br/>
		</div>
		<div>Apellido paterno:<br/>
		<input type="text" name="apellidoPaterno"><br/>
		</div>
		<div>
		Apellido materno:<br/>
		<input type="text" name="apellidoMaterno"><br/>
		</div>
		<div>
		Telefono:<br/>
		<input type="tel" name="telefono"><br/>
		</div>
		<div>
		Correo:<br/>
		<input type="email" name="correo"><br/>
		</div>
		<div>Usuario:<br/>
		<input type="text" name="usuario"><br/>
		</div>
		<div>Contraseña:<br/>
		<input type="password" name="password" autocomplete="off"><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>
</body>

</html>
