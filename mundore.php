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
	//session_start();
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
					<td id="Retailr1"><a id="linkretail1" href=""><img id="Retailr1img" onclick="detalles()" src="" alt=""></a><p id="Retailr1txt"></p></td>
					<td id="Retailr2"><a id="linkretail2" href=""><img id="Retailr2img" onclick="detalles()" src="" alt=""></a><p id="Retailr2txt"></p></td>
					<td id="Retailr3"><a id="linkretail3" href=""><img id="Retailr3img" onclick="detalles()" src="" alt=""></a><p id="Retailr3txt"></p></td>
					<td id="Retailr4"><a id="linkretail4" href=""><img id="Retailr4img" onclick="detalles()" src="" alt=""></a><p id="Retailr4txt"></p></td>
				</tr>
				<tr>
					<td id="Retailr5"><a id="linkretail5" href=""><img id="Retailr5img" onclick="detalles()" src="" alt=""></a><p id="Retailr5txt"></p></td>
					<td id="Retailr6"><a id="linkretail6" href=""><img id="Retailr6img" onclick="detalles()" src="" alt=""></a><p id="Retailr6txt"></p></td>
					<td id="Retailr7"><a id="linkretail7" href=""><img id="Retailr7img" onclick="detalles()" src="" alt=""></a><p id="Retailr7txt"></p></td>
					<td id="Retailr8"><a id="linkretail8" href=""><img id="Retailr8img" onclick="detalles()" src="" alt=""></a><p id="Retailr8txt"></p></td>
				</tr>
			</table>
		</section>

		<section id="resRetail2">
			<table id="tblRetail">
				<tr>
					<td id="Retailr9"><a id="linkretail9" href=""><img id="Retailr9img" onclick="detalles()" src="" alt=""></a><p id="Retailr9txt"></p></td>
					<td id="Retailr10"><a id="linkretail10" href=""><img id="Retailr10img" onclick="detalles()" src="" alt=""></a><p id="Retailr10txt"></p></td>
					<td id="Retailr11"><a id="linkretail11" href=""><img id="Retailr11img" onclick="detalles()" src="" alt=""></a><p id="Retailr11txt"></p></td>
					<td id="Retailr12"><a id="linkretail12" href=""><img id="Retailr12img" onclick="detalles()" src="" alt=""></a><p id="Retailr12txt"></p></td>
				</tr>
				<tr>
					<td id="Retailr13"><a id="linkretail13" href=""><img id="Retailr13img" onclick="detalles()" src="" alt=""></a><p id="Retailr13txt"></p></td>
					<td id="Retailr14"><a id="linkretail14" href=""><img id="Retailr14img" onclick="detalles()" src="" alt=""></a><p id="Retailr14txt"></p></td>
					<td id="Retailr15"><a id="linkretail15" href=""><img id="Retailr15img" onclick="detalles()" src="" alt=""></a><p id="Retailr15txt"></p></td>
					<td id="Retailr16"><a id="linkretail16" href=""><img id="Retailr16img" onclick="detalles()" src="" alt=""></a><p id="Retailr16txt"></p></td>
				</tr>
			</table>
		</section>
		<!-- Secciones de performance-->
		<section id="resPerformance1">
			<table id="tblPerformance">
				<tr>
					<td id="Performancer1"><a id="linkperformance1" href=""><img id="Performancer1img" onclick="detalles()" src="" alt=""></a><p id="Performancer1txt"></p></td>
					<td id="Performancer2"><a id="linkperformance2" href=""><img id="Performancer2img" onclick="detalles()" src="" alt=""></a><p id="Performancer2txt"></p></td>
					<td id="Performancer3"><a id="linkperformance3" href=""><img id="Performancer3img" onclick="detalles()" src="" alt=""></a><p id="Performancer3txt"></p></td>
					<td id="Performancer4"><a id="linkperformance4" href=""><img id="Performancer4img" onclick="detalles()" src="" alt=""></a><p id="Performancer4txt"></p></p></td>
				</tr
				<tr>
					<td id="Performancer5"><a id="linkperformance5" href=""><img id="Performancer5img" onclick="detalles()" src="" alt=""></a><p id="Performancer5txt"></p></p></td>
					<td id="Performancer6"><a id="linkperformance6" href=""><img id="Performancer6img" onclick="detalles()" src="" alt=""></a><p id="Performancer6txt"></p></p></td>
					<td id="Performancer7"><a id="linkperformance7" href=""><img id="Performancer7img" onclick="detalles()" src="" alt=""></a><p id="Performancer7txt"></p></p></td>
					<td id="Performancer8"><a id="linkperformance8" href=""><img id="Performancer8img" onclick="detalles()" src="" alt=""></a><p id="Performancer8txt"></p></p></td>
				</tr>
			</table>
		</section>

		<section id="resPerformance2">
			<table id="tblPerformance">
				<tr>
					<td id="Performancer9"><a id="linkperformance9" href=""><img id="Performancer9img" onclick="detalles()" src="" alt=""></a><p id="Performancer9txt"></p></td>
					<td id="Performancer10"><a id="linkperformance10" href=""><img id="Performancer10img" onclick="detalles()" src="" alt=""></a><p id="Performancer10txt"></p></td>
					<td id="Performancer11"><a id="linkperformance11" href=""><img id="Performancer11img" onclick="detalles()" src="" alt=""></a><p id="Performancer11txt"></p></td>
					<td id="Performancer12"><a id="linkperformance12" href=""><img id="Performancer12img" onclick="detalles()" src="" alt=""></a><p id="Performancer12txt"></p></td>
				</tr>
				<tr>
					<td id="Performancer13"><a id="linkperformance13" href=""><img id="Performancer13img" onclick="detalles()" src="" alt=""></a><p id="Performancer13txt"></p></td>
					<td id="Performancer14"><a id="linkperformance14" href=""><img id="Performancer14img" onclick="detalles()" src="" alt=""></a><p id="Performancer14txt"></p></td>
					<td id="Performancer15"><a id="linkperformance15" href=""><img id="Performancer15img" onclick="detalles()" src="" alt=""></a><p id="Performancer15txt"></p></td>
					<td id="Performancer16"><a id="linkperformance16" href=""><img id="Performancer16img" onclick="detalles()" src="" alt=""></a><p id="Performancer16txt"></p></td>
				</tr>
			</table>
		</section>
	<!-- <object id="datos" data="tablas.php"></object> -->
</body>
</html>