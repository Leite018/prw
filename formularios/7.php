<?php
    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $idadeEmDias = $idade*365;

    echo"<h3>Idade em dias: <b>$idadeEmDias</b> dias</h3>"; 
    echo"<a href='7.html'><button>Voltar</button></a>";
?>