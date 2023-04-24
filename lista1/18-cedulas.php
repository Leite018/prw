<?php
    $notas = array(100, 50, 20, 10, 5, 2, 1);

    $N =(int) readline();

    echo $N . "\n";

    for ($i = 0; $i < 7; $i++) {
       $valor =  $N / $notas[$i];
        
        echo (int) $valor . " nota(s) de R$ " . $notas[$i] . ",00\n";
        
        $N %= $notas[$i];
    }
?>