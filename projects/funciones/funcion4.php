<?php

include('funcion2.php');

$temperaturas = inicializar_array(10, 15, 20, 23, 35);
$max = calcular_maximoa($temperaturas);
echo "Media: $max";

?>