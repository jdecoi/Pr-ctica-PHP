<?php

echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

print_r($_SERVER);
echo "<br>";

var_dump($_SERVER);
echo "<br>";


foreach ($_SERVER as $key => $value) {
    
        echo "$key : $value";
        echo "<br/>";
    }

?>