<!-- 	
Este contenido es de libre uso y modificación bajo la siguiente licencia: http://creativecommons.org/licenses/by-nc-sa/2.5/deed.es

Sobre el reconocimiento:
Todos los códigos han sido realizados con la idea de que sirvan para colaborar con el aprendizage de aquellos que se están introduciendo
en estas tecnologías y no con el objetivo de que sean utilizados directamente en sitios web. No obstante si utilizas algún código en tu sitio 
(ya sea sin modificar o modificado), o si ofreces los fuentes para descargar o si bien decides publicar alguno de los artículos debes cumplir con:
-Colocar un link a http://www.formatoweb.com.ar/ajax/ visible por tus usuarios como forma de mención a la fuente original del contenido.
-Enviar un correo a edanps@gmail.com informando la URL donde el contenido se ha publicado o se va a publicar en un futuro.
-Si publicas los fuentes para descargar este texto no debe ser eliminado ni alterado.

Más ejemplos y material sobre AJAX en: http://www.formatoweb.com.ar/ajax/
Cualquier sugerencia, crítica o comentario son bienvenidos.
Contacto: edanps@gmail.com
-->

<!DOCTYPE HTML>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  	<title>Ganadores</title>
  	<script type="text/javascript" src="js/xml_http_request_post.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<script type="text/javascript" src="js/recargar_datos.js"></script>
  	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js' type="text/javascript"></script>
  	<?php
  		session_start();
		require_once('php/conexion.php');
  	?>
</head>
<body>
  	<object id="tRetail" data="Imagenes/logoretail.jpg" type="image/jpeg"></object>
  	<object id="tperformance" data="Imagenes/logoperformance.jpg" type="image/jpeg"></object>
  	</br>
		<label id="lbl_fecha" for="fecha">Fecha</label>
		<select name="fecha" id="fecha">
			<option value=""></option>
			<?php 
				$resultado=$mysqli->query("SELECT fecha_reportada FROM grupo");
				while($fila = $resultado->fetch_row()){
					echo "<option value='".$fila['0']."'>".$fila['0']."</option>";
				}
			?>
		</select>
	<input type="button" id="ejecuta" onclick="traerDatos()" value="Seleccionar" />
	<!-- Secciones de Retail-->
	<section id="resRetail1">
			<table id="tblRetail">
				<tr>
					<td id="Retailr1"><img id="Retailr1img" src="" alt=""><p id="Retailr1txt"></p></td>
					<td id="Retailr2"><img id="Retailr2img" src="" alt=""><p id="Retailr2txt"></p></td>
					<td id="Retailr3"><img id="Retailr3img" src="" alt=""><p id="Retailr3txt"></p></td>
					<td id="Retailr4"><img id="Retailr4img" src="" alt=""><p id="Retailr4txt"></p></td>
				</tr>
				<tr>
					<td id="Retailr5"><img id="Retailr5img" src="" alt=""><p id="Retailr5txt"></p></td>
					<td id="Retailr6"><img id="Retailr6img" src="" alt=""><p id="Retailr6txt"></p></td>
					<td id="Retailr7"><img id="Retailr7img" src="" alt=""><p id="Retailr7txt"></p></td>
					<td id="Retailr8"><img id="Retailr8img" src="" alt=""><p id="Retailr8txt"></p></td>
				</tr>
			</table>
		</section>

		<section id="resRetail2">
			<table id="tblRetail">
				<tr>
					<td id="Retailr9"><img id="Retailr9img" src="" alt=""><p id="Retailr9txt"></p></td>
					<td id="Retailr10"><img id="Retailr10img" src="" alt=""><p id="Retailr10txt"></p></td>
					<td id="Retailr11"><img id="Retailr11img" src="" alt=""><p id="Retailr11txt"></p></td>
					<td id="Retailr12"><img id="Retailr12img" src="" alt=""><p id="Retailr12txt"></p></td>
				</tr>
				<tr>
					<td id="Retailr13"><img id="Retailr13img" src="" alt=""><p id="Retailr13txt"></p></td>
					<td id="Retailr14"><img id="Retailr14img" src="" alt=""><p id="Retailr14txt"></p></td>
					<td id="Retailr15"><img id="Retailr15img" src="" alt=""><p id="Retailr15txt"></p></td>
					<td id="Retailr16"><img id="Retailr16img" src="" alt=""><p id="Retailr16txt"></p></td>
				</tr>
			</table>
		</section>
		<!-- Secciones de performance-->
		<section id="resPerformance1">
			<table id="tblPerformance">
				<tr>
					<td id="Performancer1"></td>
					<td id="Performancer2"></td>
					<td id="Performancer3"></td>
					<td id="Performancer4"></td>
				</tr>
				<tr>
					<td id="Performancer5"></td>
					<td id="Performancer6"></td>
					<td id="Performancer7"></td>
					<td id="Performancer8"></td>
				</tr>
			</table>
		</section>

		<section id="resPerformance2">
			<table id="tblPerformance">
				<tr>
					<td id="Performancer9"></td>
					<td id="Performancer10"></td>
					<td id="Performancer11"></td>
					<td id="Performancer12"></td>
				</tr>
				<tr>
					<td id="Performancer13"></td>
					<td id="Performancer14"></td>
					<td id="Performancer15"></td>
					<td id="Performancer16"></td>
				</tr>
			</table>
		</section>
	<!-- <object id="datos" data="tablas.php"></object> -->
</body>
</html>