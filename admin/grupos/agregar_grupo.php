<?php
$grupo = $_POST["grupo"];
$strfecha = $_POST["fecha"];
$fecha = strtotime($_POST["fecha"]);
$gf = $grupo."-".date('ym', $fecha);

include("../../php/conexion.php");

$table = 'grupo';

    $mysqli->query("INSERT INTO grupo (grupo, fecha_reportada, grupo_fecha) VALUES ('$grupo','$strfecha' ,'$gf')");
	echo "Registro almacenado con exito";

echo "<br/>";
echo "<a href='admin_grupo.html'><input type='button' id='ejecuta' value='Agregar mas grupos' /></a>";
echo "<a href='../../admin.php'><input type='button' id='ejecuta' value='Agregar ganadores' /></a>";
?>
