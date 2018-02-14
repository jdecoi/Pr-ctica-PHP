
<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8" />
<title></title>
</head>
<body>

echo "<table border=\"1\">";
<?php


for($i = 1; $i <=10; $i++) {
$numero = rand (1, 9);
echo $resultado = $numero * $i;
echo "<tr>";
echo "<td> $numero </td>";
echo "<td>x</td>";
echo "<td>$i</td>";
echo "<td>=</td>";
echo "<td>$resultado</td>";
echo "</tr>";
}


?>
</body>
</html>