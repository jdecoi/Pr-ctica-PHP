<!DOCTYPE <html>
<html>
<head>
<meta charset="uft-8" />
<title>practica16</title>
</head>
<body>

<form method="post">

<div>
    <label for="numero_elementos">Introduce el numero de elementos del array: </label>
    <input type="number" name="numero_elementos" min="1" max="100" value="1">
</div>

<button type="submit">Enviar</button>

</form>

<?php

$numele = $_POST["numero_elementos"];

print_r ($_POST);

if (!isset($numele) || empty($numele)) die;


$temperaturas = array();

for ($i = 0; $i < $numele; $i++) {
    $temperaturas[$i] = rand(1, 30);

}

$suma = 0;

for ($i = 0; $i < $numele; $i++) {
$suma = $temperaturas[$i] + $suma;

}


$media = $suma / $numele;

echo "Media: $media";


// Calculo el máximo


$maximo = $temperaturas[0];
for($i = 1; $i < $numele; $i++) {
    if($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }

}


$minimo = $temperaturas[0];
for($i = 1; $i < $numele; $i++) {
    if($temperaturas[$i] > $minimo) {
        $minimo = $temperaturas[$i];
    }

}

echo"<pre>";
print_r($temperaturas);
echo"</pre>";


echo "Temperatura: $maximo";
echo"<pre>";
print_r($maximo);
echo"</pre>";


echo "Temperatura: $minimo";
echo"<pre>";
print_r($minimo);
echo"</pre>";

    ?>

    </body>
    </html>