<?php 
session_start();
include("conexion.php");
$id_a=$_SESSION["id_unico2"];
$mysqli->query("DELETE * FROM ganadores WHERE grupo_fecha = '$id_a'");
header ("Location: ../admin.php");
 ?>