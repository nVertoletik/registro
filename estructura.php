<?php
	$cifra1 =5;
	$cifra2 =8;
	
	function suma_numeros($var1, $var2){
		$suma = $var1 + $var2;
		return $suma;
	}
	
	$monto_total = suma_numeros($cifra1, $cifra2);
	echo "La suma total es: ".$monto_total;
?>

/*
$con = pg_connect("host port dbname user password") or
die(pg_last_error());
$result = pg_query($con, "select * from tabla");
$resp = pg_fetch_array($result);
pg_close($con);

manejo con errores
$con = pg_connect("host port dbname user password") or die(pg_last_error());

inserciones o actualizaciones
$query = "insert into tables values('$_POST[param1]', '$_POST[param2]')";
$result = pg_query($query);
*/
