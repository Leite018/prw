<?php
    $A = readline();
    $B = readline();
    $C = readline();

    $MEDIA = (($A * 2) + ($B * 3) + ($C * 5))/10;
    $MEDIA = number_format($MEDIA, 1, ".", "");
    echo "MEDIA = $MEDIA\n";
?>