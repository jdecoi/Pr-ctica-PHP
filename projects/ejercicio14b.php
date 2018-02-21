<!DOCTYPE <html>
<html>
<head>
<meta charset="uft-8" />
<title>practica14</title>
</head>
<body>

<form method="post">

<div>
    <label for="puntos">Nota: </label>
    <input type="int" name="puntos">
</div>

<button type="submit">Calificar</button>

</form>

<?php

$vari = $_POST["puntos"];

switch ($vari)
{
    case 0:
    echo "Insuficiente";
    break;

    case 1:
    echo "Insuficiente";
    break;

    case 2:
    echo "Insuficiente";
    break;

    case 3:
    echo "Insuficiente";
    break;

    case 4:
    echo "Insuficiente";
    break;

    case 5:
    echo "Suficiente";
    break;

    case 6:
    echo "Suficiente";
    break;

    case 7:
    echo "Notable";
    break;

    case 8:
    echo "Notable";
    break;

    case 9:
    echo "Sobresaliente";
    break;

    case 10:
    echo "Sobresaliente";
    break;

    default:
    echo "Intoduzca una nota entre el 0 y el 10";
    break;
}

echo "</br>";
echo "</br>";

echo "Puntos: $vari";

   

    ?>

    </body>
    </html>