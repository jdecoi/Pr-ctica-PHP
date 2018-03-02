<?php
include('funcion2.php');

$temperaturas = inicializar_array(10, 15, 20, 23, 35);
$media = calcular_media($temperaturas);
echo "Media: $media";


?>