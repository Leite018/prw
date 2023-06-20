<?php
    include("conexao.php");
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];
    $foto = $_FILES['foto'];

    echo "<h1>Alteração de dados </h1>";
    echo "<p>Usuario: $nome</p>";
    $sql = "UPDATE usuario SET
        nome_usuario = '$nome',
        email_usuario = '$senha',
        fone_usuario = '$fone',
        senha = '$senha',
        foto = '$foto'

        WHERE id_usuario = $id_usuario";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo"Erro ao alterar dados: $mysqli_error($con)!";

?>
<a href=listar_usuarios.php>Voltar</a>