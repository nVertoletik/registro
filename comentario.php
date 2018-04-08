<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alta de comentarios</title>

</head>
<body>
<h3>Comentario</h3>
<br />
<p>Cualquier duda o sugerencia, por favor, dejanos un comentario:</p>
	<form action="guarda_comentario.php" method="post">
		<label name="nombre">Nombre:</label>
		<br />
		<input type="text" name="nombre">
		<br />
		<label name="correo">Correo electrónico:</label>
		<br />
		<input type="text" name="correo">
		<br />
		<label name="comentario">Comentarios:</label>
		<br />
		<textarea name="comentario" rows="4" cols= "40"></textarea>
		<br />
		<input type="submit" name="enviar" value="enviar">
	</form>
</body>
</html>
