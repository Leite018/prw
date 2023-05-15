<?php
    $hostname = "localhost";
    $username = "Leite";
    $password = "info211";
    $database = "projeto1";
    $port = 3306;
    $con = mysqli_connect($hostname, $username,
                $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro conexão: %s\n",
        mysqli_connect_error());
        exit();
    }
?>