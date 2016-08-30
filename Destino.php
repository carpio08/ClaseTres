<?php

$cantidad = strlen($_POST["mensaje"]);
echo $cantidad;
//Si se da determinada condicion incluyo un archivo u otro
if($cantidad > 5){
	include "MayorACinco.html";
}else {
	include "MenorACinco.html";;
}

var_dump($_REQUEST);
echo "<br>";
var_dump($_POST["mensaje"]);

?>