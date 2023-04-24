<?php
    $nomeFuncionario = readline();
    $salarioFixo = readline();
    $dinheiroDasVendas = readline();
    $salarioFixo = number_format($salarioFixo, 2, ".", "");
    $dinheiroDasVendas = number_format($dinheiroDasVendas, 2, ".", "");

    $salario = $salarioFixo + ($dinheiroDasVendas * 0.15);
    $salario = number_format($salario, 2, ".", "");

    echo "TOTAL = R$ $salario\n";
?>