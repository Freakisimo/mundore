<?php
session_start();
if(isset($_COOKIE["misitio_userid"])):
	echo "Usuario con session iniciada</br>";
	if ($_SESSION['user'] == 'admin') {
		echo "<input type='button' id='ejecuta' onclick=location.href='admin.php' value='Administrar' />";
	}
	echo "<input type='button' id='ejecuta' onclick=location.href='mundore.php' value='Pagina principal' />";
else:
	echo "No has iniciado sesion <br/> <a ref='login.html'>Iniciar sesion</a>'>";
endif;
?>