<?php
include 'formulario.php';

$unidad = $_POST["unidad"];
$opciones = $_POST["opciones"];

switch ($opciones) {
    case "var1":
	    $resultado = $unidad/29.574;
	    echo number_format($resultado, 2, '.', '.') . " onzas fluidas";
	    break;
    case "var2":
	    $resultado = $unidad*1.094;
	    echo number_format($resultado, 2, '.', '.') . " yardas";
	    break;
    case "var3":
	    $resultado = $unidad/454;
	    echo number_format($resultado, 2, '.', '.') . " libras";
	    break;
    case "var4":
	    $resultado = ($unidad*9/5)+32;
	    echo number_format($resultado, 2, '.', '.') . " fahrenheit";
	    break;
    case "var5":
	    $resultado = $unidad/1.609;
	    echo number_format($resultado, 2, '.', '.') . " millas";
	    break;
    case "var6":
	    $resultado = $unidad/26.1405;
	    echo number_format($resultado, 2, '.', '.')  . " libras esterlinas";
	    break;
}
?>

