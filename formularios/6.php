<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $frequencia = $_POST['frequencia'];
    $media = ($nota1 + $nota2)/2;

    if($frequencia>=75){
        if($media>5){
            echo"<h3> Aprovado </h3>";
        }
        else{
            echo"<h3 style= 'color: red ;'>Reprovado por nota</h3>";
        }
    }
    else{
        echo"<h3> Reprovado por Frequência </h3>";
    }
    
    echo"<a href='6.html'><button>Voltar</button></a>";
?>