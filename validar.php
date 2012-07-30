<?php
session_start();
$usuario = $_POST["usuario"];
$pass = $_POST["password"];

$db_host = 'localhost';
$db_user = 'estacion';
$db_pwd = 'AGjz8CCr';

$database = 'estacion_i2OeTb2';
$table = 'usuario';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$pass'";

$comprobar = mysql_query($sql);
$tipo_usuario = mysql_fetch_array($comprobar, MYSQL_NUM);
$_SESSION['user'] = $tipo_usuario[4];

if (mysql_num_rows($comprobar) > 0 ):
    $id_usuario = mysql_result($comprobar, 0);
    setcookie("misitio_userid","$id_usuario",time() + 3600);
    header("Location:inicio.php");
else:
    echo "Usuario o contraseña invalida";
endif;
?>