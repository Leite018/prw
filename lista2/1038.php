<?php
fscanf(STDIN, "%d %d", $codigo, $quantidade);

$tabela_precos = array(
    1 => 4.00,
    2 => 4.50,
    3 => 5.00,
    4 => 2.00,
    5 => 1.50
);

$valor_total = number_format ($tabela_precos[$codigo] * $quantidade,2,".","");
echo "Total: R$  $valor_total\n";
?>