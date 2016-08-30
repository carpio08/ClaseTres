<html>
	<head>	</head>
	<body>
		<form method="POST" action="Destino.php">
			<input type="text" name="mensaje">
			<input type="submit"> 
		</form>
	</body>
</html>

<?php
	//el boton submit si no indico nada pasa todas las variables por GET
	//El submit me redirige, si no le indico a donde va a la misma pagina, para indicarle tengo q decirle al formulario a dónde va a ir
	echo "HOLA PHP";
	echo "<br>";
	//$_ nos indica que esa va a ser una variable del sistema
	var_dump($_REQUEST);
	echo "<br>";
	//solo puedo pasar por un mètodo los datos, o post o get, no ambos
	//Para indicar cuál va a usar el formulario tengo q ponerle en su etiqueta qué método va a usar
	var_dump($_GET);
	echo "<br>";
	var_dump($_POST);

	//Para acceder a las variables por post o get pongo $_POST["NAME DE LA ETIQUETA"]
	//Pero antes siempre debo verificar si la misma está seteada, porq solo se inicializan cuando ocurrio un submit o recarga de la pagina
	echo "<br>";
	if(isset($_POST["mensaje"])){
		echo $_POST["mensaje"];	
	}else{
		echo "PRIMER INGRESO";
	}
	

?>