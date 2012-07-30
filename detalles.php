<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<?php include('php/conexion_mysql.php'); ?>
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body ="algo">
	<img id="encabezado" src="Imagenes/let_performance.jpg" alt="">
	<?php 
		$nomb=$_GET["nombre"];
		$ganadores = mysql_query("SELECT imagen, nombre, puesto, estado,  fecha_ingreso, ganado_por, fecha_nacimiento, hobbies, domicilio  FROM ganadores WHERE nombre = '$nomb'");
		$resultado = mysql_fetch_array($ganadores, MYSQL_NUM);
		//$result = mysql_fetch_row($ganadores);
			//for ($i=0; $i < 9; $i++) { 
				//$resultado[$i] = $result[$i];
			//};
	 	echo "<section id='detalles'>";
		echo "<table id='detalles'>";
			echo "<thead><tr><th colspan='2'><h2>$resultado[2]</h2></th></tr></thead>";
			echo "<tr><td rowspan='9'><img id='detalles' src='$resultado[0]' alt=''></td></tr>";
			echo "<tr><td>Nombre</td><td>$resultado[1]</td></tr>";
			echo "<tr><td>Posicion</td><td>$resultado[2]</td></tr>";
			echo "<tr><td>Estado</td><td>$resultado[3]</td></tr>";
			echo "<tr><td>Fecha de ingreso a la compañia</td><td>$resultado[4]</td></tr>";
			echo "<tr><td>Ganado por</td><td>$resultado[5]</td></tr>";
			echo "<tr><td>Cumpleaños</td><td>$resultado[6]</td></tr>";
			echo "<tr><td>Hobbies</td><td>$resultado[7]</td></tr>";
			echo "<tr><td>Domicilio</td><td>$resultado[8]</td></tr>";
		echo "</table>";
		echo "</section>";
	?>
</body>
</html>