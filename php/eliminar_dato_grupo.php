<?php 
session_start();
include("conexion.php");
$id_a=$_SESSION["id_unico"];
$mysqli->query("DELETE * FROM grupos WHERE grupo_fecha = '$id_a'");
header ("Location: ../admin.php");
 ?>