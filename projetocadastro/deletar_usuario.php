<?php
    include("conexao.php");
    $id_usuario = $_GET['id_usuario'];


    echo "<h1>Deletar usuario </h1>";
   
    $sql = "DELETE FROM usuario
        WHERE id_usuario = $id_usuario";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados Deletedo com sucesso!<br>";
    else
        echo"Erro ao deletar dados: $mysqli_error($con)!";
?>