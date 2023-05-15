<?php

$ano = $_POST['ano'];

    if ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) {
        echo "<a>$ano é um ano bissexto.</a>";
    } else {
        echo "<a>$ano não é um ano bissexto.</a>";
    }

echo"<br> <a href='4.html'> <button> Voltar </button> </a>";

?>