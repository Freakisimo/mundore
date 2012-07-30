<?php 
	$fecha = $_POST['algo'];
	include ("conexion.php");
	$performance = $mysqli->query("SELECT region, imagen, nombre FROM grupo LEFT JOIN ganadores ON grupo.grupo_fecha = ganadores.grupo_id WHERE grupo = 'Performance Awards' AND fecha_reportada = '$fecha'");
	while ($fila = $performance->fetch_row()) {
		$resultado[] = array('region' => $fila['0'], 'imagen' => $fila['1'], 'nombre' => $fila['2']);	
	}
	$json = json_encode($resultado);
	echo $json;
 ?>