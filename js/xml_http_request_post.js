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

	// Creo el objeto AJAX
	var ajax1=nuevoAjax();
	var ajax2=nuevoAjax();

	// Abro la conexión, envío cabeceras correspondientes al uso de POST y envío los datos con el método send del objeto AJAX
	ajax1.open("POST", "php/leer_datos_retail.php", true);
	ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax1.send("algo="+tipoDato);

	ajax1.onreadystatechange=function()
	{	
		if (ajax1.readyState==4)
		{
			//Trasformar cadena de texto a objeto tipo json
			var str_json = ajax1.responseText;
			var ident;
			//alert(str_json);
			//Obtener valores de objeto tipo 
			var obj_json = JSON.parse(str_json, function(key, value){
				if (key=='region') {
					ident = value;
					//alert(value);
					document.getElementById("Retailr"+ident+"txt").innerHTML="Region"+value;
				}else if(key=='imagen'){	
					document.getElementById("Retailr"+ident+"img").src=value;
				}else if(key=='nombre'){
					document.getElementById("Retailr"+ident+"img").alt=value;
					document.getElementById("linkretail"+ident).href="detalles.php?nombre="+value;
				};
			});
		}
	}

	ajax2.open("POST", "php/leer_datos_performance.php", true);
	ajax2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax2.send("algo="+tipoDato);

	ajax2.onreadystatechange=function()
	{	
		if (ajax2.readyState==4)
		{
			//Trasformar cadena de texto a objeto tipo json
			var str_json2 = ajax2.responseText;
			var ident2;			
			//Obtener valores de objeto tipo 
			var obj_json2 = JSON.parse(str_json2, function(key, value){
				if (key=='region') {
					ident2 = value;				
					document.getElementById("Performancer"+ident2+"txt").innerHTML="Region"+value;
				}else if(key=='imagen'){	
					document.getElementById("Performancer"+ident2+"img").src=value;				
				}else if(key=='nombre'){
					document.getElementById("Performancer"+ident2+"img").alt=value;
					document.getElementById("linkperformance"+ident2).href="detalles.php?nombre="+value;				
				};
			});
		}
	}
}

function detalles(){

}