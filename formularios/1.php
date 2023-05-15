<?php
    $operacao = $_POST['operacao'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $resultado = 0;
    if($operacao == 'somar'){
        $resultado = $numero1+$numero2;
    }
    else if($operacao == 'subtrair'){
        $resultado = $numero1-$numero2;
    }
    else if($operacao == 'dividir'){
        $resultado = $numero1/$numero2;
    }
    else if($operacao == 'multiplicar'){
        $resultado = $numero1*$numero2;
    }

    echo"<h1> O resultado será: $resultado</h1>";

    echo"<a href='1.html'><button>Voltar</button></a>";
?>