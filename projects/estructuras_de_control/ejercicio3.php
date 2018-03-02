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

$dia = $_POST["dia"];

if(!empty($dia)) {
    if($dia==1) {
        echo "Lunes";
    }    
    elseif($dia==2) {
        echo "Martes";
    }
    elseif($dia==3) {
            echo "Miercoles";
        } 
    elseif($dia==4) {
            echo "Jueves";
        } 
    elseif($dia==5) {
            echo "Viernes";
        }    
    elseif($dia==6) {
            echo "Sabado";
        }    
    elseif($dia==7) {
            echo "Domingo";
        }    
    
echo "</br>";
echo "</br>";


    }

    ?>

    </body>
    </html>