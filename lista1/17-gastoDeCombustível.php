<?php
$A = readline();
$B = readline();

$GASTO = ($A * $B)/12;
$GASTO = number_format($GASTO, 3, ".", "");
echo "$GASTO\n";
?>