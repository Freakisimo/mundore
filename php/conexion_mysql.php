<?php
$db_host = 'localhost';
$db_user = 'estacion';
$db_pwd = 'AGjz8CCr';
$database = 'estacion_i2OeTb2';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
?>