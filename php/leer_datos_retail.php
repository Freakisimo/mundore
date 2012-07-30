<?php 
	$fecha = $_POST['algo'];
	include ("conexion.php");
	$retail=$mysqli->query("SELECT region, imagen, nombre  FROM grupo LEFT JOIN ganadores ON grupo.grupo_fecha = ganadores.grupo_id WHERE grupo = 'Retail Execution' AND fecha_reportada = '$fecha'");
	while ($fila = $retail->fetch_row()) {
		$resultado[] = array('region' => $fila['0'], 'imagen' => $fila['1'], 'nombre' => $fila['2']);	
	}
	$json = json_encode($resultado);
	echo $json;
 ?>