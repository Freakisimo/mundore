<!DOCTYPE HTML>
<html lang="es-MX">
	<?php 
		include("../../php/conexion.php");
	?>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../admin_css.css">
	
	<title>Agregar ganadores</title>
</head>
<body>
	<div id="encabezado"><h1>Agregar datos principales de los ganadores</h1></div>
	<form id="agregar" action="agregar_ganadores.php" method="post" enctype="multipart/form-data">
		<fieldset id="agregar_ganadores">
		<legend>Agregar datos de ganadores</legend>
			<table>
				<tr>			
					<?php $id_a=$_GET["id"]; ?>
					<td><label for='id'>ID:</label></td>					
					<td><input type='text' name='id' id='id' readonly value=<?php echo"'".$id_a."'"; ?>/></td>					 
				</tr>
				<tr>
					<td><label for='nombre'>Nombre:</label></td>
					<td><input type='text' name='nombre' id='nombre' /></td>
				</tr>
				<tr>
					<td><label for='puesto'>Puesto:</label></td>
					<td><input type='text' name='puesto' id='puesto' /></td>
				</tr>
				<tr>
					<td><label for='ciudad'>Ciudad:</label></td>
					<td><input type='text' name='ciudad' id='ciudad' /></td>
				</tr>
				<tr>
					<td><label for='estado'>Estado:</label></td>
					<td><input type='text' name='estado' id='estado' /></td>
				</tr>
				<tr>
					<td><label for='region'>Region:</label></td>
					<td><input type='text' name='region' id='region' /></td>
				</tr>
				<tr>
					<td><label for='fecha_ingreso'>Fecha de ingreso:</label></td>
					<td><input type='date' name='fecha_ingreso' id='fecha_ingreso' /></td>
				</tr>
				<tr>
					<td><label for='fecha_nacimiento'>Fecha de nacimiento:</label></td>
					<td><input type='date' name='fecha_nacimiento' id='fecha_nacimiento' /></td>
				</tr>
				<tr>
					<td><label for='domicilio'>Domicilio:</label></td>
					<td><input type='text' name='domicilio' id='domicilio' /></td>
				</tr>
				<tr>
					<td><label for='hobbies'>Hobbies:</label></td>
					<td><input type='text' name='hobbies' id='hobbies' /></td>
				</tr>
				<tr>
					<td><label for='imagen'>Imagen:</label></td>
					<td><input type='file' name='imagen' id='imagen' /></td>
				</tr>
				<tr>					
					<td colspan="2"><input type='submit' name='agregar' value='agregar' /></td>
				</tr>			
			</table>
		</fieldset>		
	</form>
</body>
</html>