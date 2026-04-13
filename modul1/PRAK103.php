<?php
$c = 37.841;
$f = (9/5) * $c + 32;
$r = (4/5) * $c;
$k = $c + 273.15;

$f = number_format($f, 4, ',', '.');
$r = number_format($r, 4, ',', '.');
$k = number_format($k, 3, ',', '.');

echo "Fahrenheit (F) = $f<br>";
echo "Reamur (R) = $r<br>";
echo "Kelvin (K) = $k";
?>