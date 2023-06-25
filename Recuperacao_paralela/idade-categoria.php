<?php
  fscanf(STDIN, "%s\n", $idade);
  if ($idade <=10){
    echo "categoria infantil";
  }else if ($idade <=15){
    echo "categoria juvenil";
  }else if ($idade <=18){
    echo "categoria sub-20";
  }else {
    echo "categoria adulto";
  }
?>