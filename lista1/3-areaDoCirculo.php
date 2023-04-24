<?php
    $n = 3.14159;
    $raio = readline();
    
    $area = $n * ($raio * $raio);
    $area = number_format($area, 4, ".", "");
    echo "A=$area\n";
?>