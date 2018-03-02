<?php

$frutas = array("limón", "naranja", "banana", "albaricoque");
sort($frutas);
for ($i = 0; $i < count($frutas); $i++) {
    echo "<h1>$frutas[$i]</h1>";
}


$alumnos = array(
    "Antonio"=>"27",
    "Maria"=>"29",
    "Juan"=>"28",
    "Pepe"=>"31");

echo "<h1> Orden descentente por valor ASORT </h1>";

asort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2> $clave = $valor <h2>";
}

echo "<h1> Orden descentente invertido por valor ARSORT </h1>";

arsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2> $clave = $valor <h2>";
}

echo "<h1> Orden descentente por valor KSORT </h1>";

ksort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2> $clave = $valor <h2>";
}

echo "<h1> Orden descentente invertido por valor KRSORT </h1>";

krsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h2> $clave = $valor <h2>";
}


echo json_encode($alumnos);




?>

