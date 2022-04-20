<?php
include 'formulario.php';

$unidad = $_POST["unidad"];
$opciones = $_POST["opciones"];

switch ($opciones) {
    case "var1":
	    $resultado = $unidad*0.03381;
	    echo $resultado . " onzas fluidas";
	    break;
    //case "var2":
     //   echo "i es igual a 1";
    //case "var3":
     //   echo "i es igual a 2";
     //case "var4":
      //  echo "i es igual a 2";
     //case "var5":
      //  echo "i es igual a 2";
     //case "var6":
      //  echo "i es igual a 2";
}
?>

