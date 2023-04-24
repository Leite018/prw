<?php
$raio = readline();
$pi = 3.14159;

$volume = (4/3) * $pi * pow($raio, 3);
$volume = number_format($volume,3,".","");

echo "VOLUME =  $volume\n";

?>