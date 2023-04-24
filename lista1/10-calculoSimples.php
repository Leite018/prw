<?php
    $x = readline(); 
    $x = explode(' ',$x);
    
    $codPeca1 = (int)$x[0];
    $numPeca1 = (double)$x[1];
    $valPeca1 = (double)$x[2];

    $y = readline(); 
    $y = explode(' ',$y);

    $codPeca2 = (int)$y[0];
    $numPeca2 = (double)$y[1];
    $valPeca2 = (double)$y[2];

    $total = ($numPeca1 * $valPeca1 ) + ($numPeca2 * $valPeca2); 
    $total = number_format($total, 2, ".","");

    echo "VALOR A PAGAR: R$ $total\n";
?>