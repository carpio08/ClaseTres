<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GUIA EJERCICIOS CLASE 03 - EJERCICIO25</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
	</head>
	<body>
		<div class="CajaInicio animated bounceInRight">
			<h1>EJERCICIO 26</h1>
			<form id="FormIngreso" method="POST" action="mostrar.php">
				<input type="text"  placeholder="Ingrese alto" name="alto" >
				<input type="text"  placeholder="Ingrese ancho" name="ancho" >
				<div class="marginTop">
					<input type="text"  placeholder="Superficie...." name="superficie" class ="marginTop">
				</div>	
				<input type="button" class="MiBotonUTNJuego" value="Misma Pagina" onClick="butonClick()"> 	
				<input type="submit" class="MiBotonUTNJuego" value="Otra Pagina"> 	
							
			</form>
		</div>
	</body>
</html>

<script type="text/javascript">
	function butonClick(){
		var alto = document.getElementsByName("alto")[0].value;
		var ancho = document.getElementsByName("ancho")[0].value;
		var superficie = alto * ancho;
		document.getElementsByName("superficie")[0].value = superficie;
		
	}
</script>
