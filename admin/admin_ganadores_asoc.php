<?php 
session_start();
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="admin_css.css">
	<script type="text/javascript" src="../js/xml_http_request_post.js"></script>
	<?php 
		include("../php/conexion.php");
	 ?>
	<title>Conetenidos por grupo</title>
</head>
<body>
	<div id="encabezado"><h1>Administrador de contenidos por grupo</h1></div>
	<div id="main">
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Puesto</th>
					<th>Ciudad</th>
					<th>Region</th>
					<th>Domicilio</th>
					<th>Hobbies</th>
					<th>Eliminar</th>					
				</tr>
			</thead>
			<?php 
			$id_a=$_GET["id"];
			$grupos = $mysqli->query("SELECT id_ganadores, nombre, puesto, ciudad, region, domicilio, hobbies FROM ganadores WHERE grupo_id = '$id_a'");
			while ($row = $grupos->fetch_row()) {
				echo "<tr>";
					echo "<td id='".$row['0']."'>".$row['1']."</td>";
					echo "<td>".$row['2']."</td>";
					echo "<td>".$row['3']."</td>";				
					echo "<td>".$row['4']."</td>";
					echo "<td>".$row['5']."</td>";
					echo "<td>".$row['6']."</td>";
					$id=$row['0'];
					$_SESSION["id_unico2"] = $id;
					echo "<td><a href='javascript:preguntar_ganador()' title='Eliminar'>Eliminar elemento</a></td>";
				echo "</tr>";
			};
			?>
		</table>
	</div>
</body>
</html>