<!DOCTYPE <html>
<html>
<head>
<meta charset="uft-8" />
<title>practica8</title>
</head>
<body>

<form method="post">

<div>
    <label for="puntos">Puntos: </label>
    <input type="int" name="puntos">
</div>

<button type="submit">Calificar</button>

</form>

<?php

$vari = $_POST["puntos"];

if(!empty($vari)) {
    if($vari>=0 && $vari<5) {
        echo "Insuficiente";
    }    
    elseif($vari>=5 && $vari<6) {
        echo "Suficiente";
    }
    elseif($vari>=6 && $vari<7) {
            echo "Bien";
        } 
    elseif($vari>=7 && $vari<9) {
            echo "notable";
        } 
     elseif($vari>=9 && $vari<10) {
            echo "Sobresaliente";
        }    

echo "</br>";
echo "</br>";

echo "Puntos: $vari";

    }

    ?>

    </body>
    </html>