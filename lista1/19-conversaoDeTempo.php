<?php
    $N = (int) readline();
    $horario = array(0, 0, 0);

    while($N > 0) {
        switch($N) {
            case $N < 60:
                $horario[2] = $N;
                $N = 0;
            break;
            case $N < 3600:
                $horario[1] = (int) ($N / 60);
                $N %= 60;
            break;
            default:
                $horario[0] = (int) ($N / 3600);
                $N %= 3600;
       }
    }
    echo $horario[0] . ":" . $horario[1] . ":" . $horario[2] . "\n";
?>