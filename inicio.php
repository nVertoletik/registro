<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Inicio</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/registro.css">
</head>

<body class="rgba-primary-4">
	<h2>Iniciar Sesión</h2>
	<p>
		Ingresa tu usuario y contraseña
	</p>
	
	<form action="autenticar.php" method="post">
		<div class="rgba-primary-3">
		Usuario:<br/>
		<input type="text" name="usuario"><br/>
		</div>
		<div>Contraseña:<br/>
		<input type="password" name="password"><br/>
		</div>
		<div>
		<input type="submit" value="Iniciar sesión">
		</div>
	</form>
</body>

</html>
