<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="index" background="Imagenes/fondo_clave.jpg">
	<form id='login' action='validar.php' method='post'>
		<fieldset id="login">
			<table>
			<legend><h1>Login</h1></legend>				
						<input type='hidden' name='submitted' id='submitted' value='1'/>
					<tr>
						<td>
							<label for='usuario' >Usuario:</label>
						</td>
						<td>
							<input type='text' name='usuario' id='usuario'  maxlength="50" />
						</td>
					</tr>
					<tr>
						<td>
							<label for='password' >Password*:</label>
						</td>
						<td>
							<input type='password' name='password' id='password' maxlength="50" />
						</td>
					</tr>
					<tr>
						<td colspan="2" >
							<input type='submit' name='Ingresar' value='Ingresar' align='center' />
						</td>
					</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>