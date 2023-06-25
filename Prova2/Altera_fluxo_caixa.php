<?php
    include('Conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  http://localhost/prw/projetocadastro/alterar_usuario.php -->
    <h1>Cadastro Fluxo Caixa</h1>
    <form action="Altera_fluxo_caixa_exe.php" method="POST" enctype="multipart/form-data">
        <input name="id" type="hidden"
        value="<?php echo $row ['id'] ?>">
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data">
            <?php echo $row['data'] ?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>

            <input type="radio" name="tipo" id="tipo" value="entrada">
            <label for="tipo">Entrada</label>
            <input type="radio" id="tipo" name="tipo" value="saida">
            <label for="tipo">Saida</label>
            <?php echo $row['tipo'] ?>">
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" step=".01">
            <?php echo $row['valor'] ?>">
        </div>
        <div>
            <label for="historico">Historico</label>
            <input type="text" name="historico" id="historico">
            <?php echo $row['historico'] ?>">
        </div>
        <div>
            <label>Cheque:</label>
            <select name="cheque" id="cheque">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
            <?php echo $row['cheque'] ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
</body>
</html>