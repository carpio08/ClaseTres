<?php

$cantidad = strlen($_POST["mensaje"]);

//Si se da determinada condicion incluyo un archivo u otro
//Si quiero cambiar de pagina los archivos tienen q ser .php no .html
//Si pongo .html lo incluyo en el archivo q estoy pero no me redirijo
//SI EL ARCHIVO TIENE CODIGO PHP TIENE QUE SER .PHP, SINO NO HACE FALTA Y PUEDE SER HTML
if($cantidad > 5){
	include "MayorACinco.php";
}else {
	include "MenorACinco.php";;
}

echo "VARIABLE _REQUEST <br>";
var_dump($_REQUEST);
echo  "<br> VARIABLE POST <br>";
var_dump($_POST["mensaje"]);

?>