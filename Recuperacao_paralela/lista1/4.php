<?php
  $valorProduto = 100;
  
  $valorDesconto = $valorProduto - ($valorProduto * 0.1);
  $valorParcelado = $valorProduto/5;
  $valorJuros = ($valorProduto/10) + ($valorProduto*0.2);
  
  echo "Valor com desconto: $valorDesconto \n";
  echo "Valor parcelado em 5x sem juros: $valorParcelado \n";
  echo "Valor parcelado em 10x com juros: $valorJuros \n";
?>
