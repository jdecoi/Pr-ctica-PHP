<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8" />
<title>practica7</title>
</head>
<body>

<from method="get">

<div>
    <label for="edad">Edad:</label>
    <input type="int" name="edad">
</div>
<button type="submit">Enviar<button>
</from>

<?php

if(!empty($_GET["edad"])) {
    if($_GET["edad"]<18 | $_GET["edad"]>100) {
        echo "La edad no es correcta o no eres mayor de edad";
        exit;
    }
    echo "Edad: ".$_GET["edad"];
}

?>

</body>
</html>