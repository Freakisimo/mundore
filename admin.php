<?php 
session_start();
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Grupos y fechas</title>
	<link rel="stylesheet" href="admin/admin_css.css">
	<script type="text/javascript" src="js/xml_http_request_post.js"></script>
	<?php 
		include("php/conexion.php");
	 ?>
</head>
<body>
	<div id="encabezado"><h1>Administrador de contenidos</h1></div>
	<div id="main">
		<table>
			<thead>
				<tr>
					<th>Tipo recompenza</th>
					<th>Fecha</th>
					<th>Id recompenza</th>
					<th>Eliminar datos</th>
					<th>Ver asociados</th>
					<th>Agregar datos</th>
				</tr>
			</thead>
			<?php 
			$grupos = $mysqli->query("SELECT * FROM grupo");
			while ($row = $grupos->fetch_row()) {
				echo "<tr>";
					echo "<td>".$row['1']."</td>";
					echo "<td>".$row['2']."</td>";
					echo "<td id='".$row['3']."'>".$row['3']."</td>";
					$id=$row['3'];
					$_SESSION["id_unico"] = $id;
					echo '<td><a href="javascript:preguntar()" title="Eliminar el registro">Eliminar</a></td>';
					echo "<td><a href='admin/admin_ganadores_asoc.php?id=".$id."' title='Registros asociados'>Ver asisociabos</a></td>";
					echo "<td><a href='admin/ganadores/admin_ganadores.php?id=".$id."' title='Agregar ganadores'>Agregar ganadores</a></td>";
				echo "</tr>";
			}
			?>
		</table>
		<div><input type='button' id='agregar' onclick=location.href='admin/grupos/admin_grupo.html' value='Agregar grupo' /></div>
	</div>
</body>
</html>