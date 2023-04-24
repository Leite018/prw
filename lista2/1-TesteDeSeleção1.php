<?php
    $linha = explode(' ', readline());
    $A = intval($linha[0]);
    $B = intval($linha[1]);
    $C = intval($linha[2]);
    $D = intval($linha[3]);

    if(($B > $C) && ($D > $A) && ($C + $D > $A + $B) && $C > 0 && $D > 0 && ($A % 2 == 0)){

        echo "Valores aceitos\n";
    }
    else{
        echo "Valores nao aceitos\n";
    }
?>