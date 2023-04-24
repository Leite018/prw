<?php
    $numFuncionario = readline();
    $horasTrabalhadas = readline();
    $valorPorHoras = readline();
    $valorPorHoras = number_format($valorPorHoras, 2, ".", "");

    $salario = $valorPorHoras * $horasTrabalhadas;
    $salario = number_format($salario, 2, ".", "");

    echo "NUMBER = $numFuncionario\n";
    echo "SALARY = U$ $salario\n";
?>