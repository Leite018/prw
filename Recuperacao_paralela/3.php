<?php

  $velocidadeAvenida = 60;
  $velocidadeMotorista = 67;
  
  $limite10 =$velocidadeAvenida+$velocidadeAvenida*0.1;
  $limite20 =$velocidadeAvenida+$velocidadeAvenida*0.2;

  if ($velocidadeMotorista <= $velocidadeAvenida)
      echo"Sem Multa";
    else if($velocidadeMotorista <= $limite10){  
      echo"Levou multa de $50";
    }
        else if ($velocidadeMotorista <= $limite20){
        echo"Levou multe de $100";      
        }
    else {
        echo "Levou multa de $200";
    }
 
?>