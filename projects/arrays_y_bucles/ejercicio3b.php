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
    <input type="int" name="numero_elementos" min="1" max="100" value:"1">
</div>

<button type="submit">Enviar</button>

</form>

<?php

$numele = $_POST["numero_elementos"];

if (!isset($numele) || empty($numele)) die;


$temperaturas = array();

for ($i = 0; $i < $numele; $i++) {
    $temperaturas[$i] = rand(1, 30);

}

$suma = 0;

foreach ($temperaturas as $valor) {
    $suma =$suma + $valor;
}

echo "Media: $media";


// Calculo el máximo


$maximo = $temperaturas[0];
foreach ($temperaturas as $valor);
if ($valor > $maximo) {
    $maximo = $valor;
    }




$minimno = $temperaturas[0];
foreach ($temperaturas as $valor);
if ($valor > $minimno) {
    $minimno = $valor;
    }



echo "Temperatura: $temperaturas";

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