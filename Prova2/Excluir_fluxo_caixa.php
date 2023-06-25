<?php
    include("Conexao.php");
    $id = $_GET['id'];


    echo "<h1>Deletar </h1>";
   
    $sql = "DELETE FROM fluxo_caixa
        WHERE id = $id";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados Deletedo com sucesso!<br>";
    else
        echo"Erro ao deletar dados: $mysqli_error($con)!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>