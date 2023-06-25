<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Consulta Fluxo Caixa</h3>
    <?php
        include('Conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $row = mysqli_fetch_array($result);
        $result = mysqli_query($con,$sql);

        $tipo = $_POST['tipo'];

        if($tipo == 'entrada'){
            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
        } 
        else if ($tipo == 'saida') {
            $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        } 
        else if ($tipo == 'saldo') {
            $sql = "select  sum(case when tipo = 'entrada' then valor else 0 end)
                            sum(case when tipo = 'saida' then valor else 0 end) as valor
                            from fluxo_caixa ";
        }  

        echo "".$row['valor'];
    ?>
</body>
</html>