<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8" />
<title></title>
</head>
<body>


<?php

for($num = 1; $num <=10; $num++) {
echo "Tabla del $num";
echo "<table border=\"1\">";
for($i = 1; $i <=10; $i++) {
echo $resultado = $num * $i;
echo "<tr>";
echo "<td> $num </td>";
echo "<td>x</td>";
echo "<td>$i</td>";
echo "<td>=</td>";
echo "<td>$resultado</td>";
echo "</tr>";
}
echo "</table>";
echo "<br/>";
}

?>
</body>
</html>