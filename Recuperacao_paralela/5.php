<?php
    $n1 = 8;
    $n2 = 8;
    $media= ($n1+$n2)/2;

    if ($media >=5) {
        echo "voce está aprovado";
    } elseif ($media < 4) {
        echo "Aluno reprovado";
    }
    else {
        echo "Aluno esta de exame";   
    }
?>