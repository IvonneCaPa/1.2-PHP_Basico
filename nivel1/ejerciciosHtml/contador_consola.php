<?php

    $num1 = 12;
    $num2 = 2;
    function contador(int $num2, int $num1 = 10){

        for ($x = 0; $x <= $num1; $x+=$num2) {
            return $x . PHP_EOL;
            }                 
    }
    $resultado = contador($num1, $num2);
    echo "Este es el resultado con los dos parametros $resultado \n";

    // $resultado2 = contador($num2);
    // echo "Este es el resultado con un parametro por defecto $resultado2 \n";
?>


