<?php
    $num1=24;
    $num2=37;

    function sum($number1, $number2 = 100){
      return $number1+$number2;
    }

    $sumResult1=sum($num1);
      echo "El resultado de la suma con parámetro de default es: $sumResult1 \n";
    $sumResult2=sum($num1,$num2);
      echo "El resultado de la suma sin parámetro de default es: $sumResult2 \n";

//En output tendremos:

//El resultado de la suma con parámetro de default es: 124

//El resultado de la suma sin parámetro de default es: 61
 
?>