function nuevoAjax()
{ 
	/* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
	lo que se puede copiar tal como esta aqui */
	var xmlhttp=false; 
	try 
	{ 
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// Creacion del objet AJAX para IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp=new XMLHttpRequest(); } 

	return xmlhttp; 
}

function traerDatos()
{
	var tipoDato=document.getElementById("fecha").value;
	//alert(tipoDato);
	// Obtendo la capa donde se muestran las respuestas del servidor
	var retail=document.getElementById("resRetail");
	var performance=document.getElementById("resPerformance");

	// Creo el objeto AJAX
	var ajax1=nuevoAjax();
	var ajax2=nuevoAjax();
	// Coloco el mensaje "Cargando..." en la capa
	retail.innerHTML="Cargando...";
	performance.innerHTML="Cargando...";

	// Abro la conexión, envío cabeceras correspondientes al uso de POST y envío los datos con el método send del objeto AJAX
	ajax1.open("POST", "php/leer_datos_retail.php", true);
	ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax1.send("algo="+tipoDato);

	ajax1.onreadystatechange=function()
	{	
		if (ajax1.readyState==4)
		{
			// Respuesta recibida. Coloco el texto plano en la capa correspondiente
			retail.innerHTML=ajax1.responseText;
			alert(ajax1.responseText);
		}
	}
	
	// Abro la conexión, envío cabeceras correspondientes al uso de POST y envío los datos con el método send del objeto AJAX
	ajax2.open("POST", "php/leer_datos_performance.php", true);
	ajax2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax2.send("algo="+tipoDato);

	ajax2.onreadystatechange=function()
	{
		if (ajax2.readyState==4)
		{
			// Respuesta recibida. Coloco el texto plano en la capa correspondiente
			performance.innerHTML=ajax2.responseText;
		}
	}
}

function elimina_elemento (dato) {
	alert(dato);
}