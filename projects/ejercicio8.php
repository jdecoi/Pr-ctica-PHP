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

<button type="submit">Enviar</button>

</form>

<?php

$vari = $_POST["puntos"];

if(!empty($vari)) {
    if($vari>=0 && $vari<1000) {
        echo "Game Over";
    }    
    elseif($vari>=1000 && $vari<5000) {
        echo "Nice Score";
    }
        elseif($vari>=5000 && $vari<10000) {
            echo "Excelent";
        } 
             elseif($vari=10001) {
                echo "Perfect";
        }

echo "</br>";
echo "</br>";

echo "Puntos: $vari";

    }

    ?>

    </body>
    </html>