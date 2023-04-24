<?php
list($a, $b, $c) = explode(" ", readline());

$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maior = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

echo "$maior eh o maior\n";
?>