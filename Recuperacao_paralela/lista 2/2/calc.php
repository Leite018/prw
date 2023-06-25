<?php
    $mes = $_POST['mes'];

    if (($mes > 12) || ($mes < 1)){
        echo " Mes Invalido";
    }

    else {
        switch ($mes) {
            case 1: echo "Janeiro";
                break;

            case 2: echo "Fevereiro";
                break;

            case 3: echo "Março";
                break;

            case 4: echo "Abril";
                break;

            case 5: echo "Maio";
                break;

            case 6: echo "Junho";
                break;

            case 7: echo "Julho";
                break;

            case 8: echo "Agosto";
                break;

            case 9: echo "Setempro";
                break;

            case 10: echo "Outubro";
                break;

            case 11: echo "Novembro";
                break;

            case 12: echo "Desembro";
                break;

            default:
                # code...
                break;
        }
    }
?>