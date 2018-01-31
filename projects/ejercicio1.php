<?php
$title = "tabla de multiplicar";
$ocho = 8;
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8" />
<title><?php echo $title; ?></title>
</head>
<body>



<table border="1"></table>
<?php

// Variables

/* Esto es un comentario
de
varias
lineas */

//Todo lo que empiece por "$" es una variable
$texto = "Hola";
$numero = 20;
$precio = 100.75;
$estaAprobado = true;

echo $texto;
echo "<br>";
echo $numero;
echo "<br>";
echo $precio;
echo "<br>";
echo $estaAprobado;
echo "<br>";

//Bucles
/*
for($numero = 0; $numero <=10; $numero++) {

echo "Numero: $numero";  
echo "<br>";  
}
*/




echo "<table border=\"1\">";
$ocho = 8;
for($i = 1; $i <=10; $i++) {    
echo $resultado = $ocho * $i;
echo "<tr>";
echo "<td> $ocho </td>";
echo "<td>x</td>";
echo "<td>$i</td>";
echo "<td>=</td>";
echo "<td>$resultado</td>";
echo "</tr>";
}
?>
</body>
</html>