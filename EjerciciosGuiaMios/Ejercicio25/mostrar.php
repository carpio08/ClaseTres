<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body>
	<div class="CajaInicio animated bounceInRight">		
		<?php
		$alto = (int)$_POST["alto"];
		$ancho = (int)$_POST["ancho"];
		if($alto != 0){
			if($ancho != 0){			
				$sup = (int)$_POST["alto"] * (int)$_POST["ancho"];
				echo "<h1>la superficie es</h1><br>";
				echo "<h1>" . $sup . "</h1>";
			}else{
				echo "<h1>" . "No se pudo calcular la superficie" . "</h1>";
			}
		}else{
			echo "<h1>" . "No se pudo calcular la superficie" . "</h1>";
		}
		?>
		<a href="App25.php"><input type="button" value="volver" class="MiBotonUTN"/></a>
	</div>
</body>
</html>
