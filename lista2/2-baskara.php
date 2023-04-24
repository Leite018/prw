<?php
list($a, $b, $c) = explode(" ", readline());
$delta = pow($b, 2) - 4 * $a * $c;

if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
} else {
 
    $raiz1 = number_format((-$b + sqrt($delta)) / (2 * $a),5,".","");
    $raiz2 = number_format((-$b - sqrt($delta)) / (2 * $a),5,".","");

    echo "R1 = $raiz1\n";
    echo "R2 = $raiz2\n";
}

?>