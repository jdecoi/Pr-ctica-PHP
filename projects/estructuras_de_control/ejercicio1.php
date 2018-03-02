<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Money</title> 
</head> 
<body>
<?php
$num = rand(0, 1);
if($num == 1) {
    print "<img src=\"imagenes/moneda1.png\">";
}
else {
    print "<img src=\"imagenes/moneda2.png\">";
}
?>
</body> 
</html>