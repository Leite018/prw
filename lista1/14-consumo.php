<?php
    $x = readline();
    $y = readline();
    $y = number_format($y, 1, ".", "");

    $ConsumoMedio = $x / $y;
    $ConsumoMedio = number_format($ConsumoMedio, 3, ".", "");

    echo "$ConsumoMedio km/l\n";
?>