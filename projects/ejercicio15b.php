<!DOCTYPE <html>
<html>
<head>
<meta charset="uft-8" />
<title>practica15</title>
</head>
<body>

<form method="post">

<div>
    <label for="dia">Dia: </label>
    <input type="int" name="dia">
</div>

<button type="submit">Enviar</button>

</form>

<?php
$dia = $_POST ["dia"];
echo "</br>";

echo "Dia: $dia";
echo "</br>";

switch ($dia)
{
    case 1:
    echo "Lunes";
    break;

    case 2:
    echo "Martes";
    break;

    case 3:
    echo "Miercoles";
    break;

    case 4:
    echo "Jueves";
    break;

    case 5:
    echo "Viernes";
    break;

    case 6:
    echo "Sabado";
    break;

    case 7:
    echo "Domingo";
    break;

    default:
    echo "Valor Incorrecto";
    
}
    
echo "</br>";
echo "</br>";




    ?>

    </body>
    </html>