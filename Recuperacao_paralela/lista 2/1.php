<?php
  $n = 1;
  
  while ($n<=100){
    
    if($n % 2 == 0){
    echo "Numero Par";
    $soma = $n + $soma;
    }
    echo "\n O valor de N é $n";
    $n = $n +1;
  }
  echo "\n O valor da soma dos numeros pares é $soma";

    echo"\n --------------------------------------------";

  $soma = 0;
  for ($n=1;$n<=100;$n++){
      
    if($n % 2 == 0){

    $soma = $n + $soma;
    }
    echo "\n O valor de N é $n";
    $n = $n +1;
  }
  echo "\n O valor da soma dos numeros pares é $soma";
?>