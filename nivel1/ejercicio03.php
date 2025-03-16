<?php
/** b) Crea una función Calculadora que entre dos números por parámetro, y en un tercer parámetro te permita hacer la suma, la resta, la multiplicación o la división de los dos números.
 */

 $X = 2;
 $Y = 13;

 $N = 9.8;
 $M = 3.15;

 echo "X + Y = " . $X+$Y . PHP_EOL;
 echo "X - Y = " . $X-$Y . PHP_EOL;
 echo "X * Y = " . $X*$Y . PHP_EOL;
 echo "X % Y = " . $X%$Y . PHP_EOL;

 echo PHP_EOL . "N + M = " . $N+$M . PHP_EOL;
 echo "N - M = " . $N-$M . PHP_EOL;
 echo "N * M = " . $N*$M . PHP_EOL;
 echo "N % M = " . $N%$M . PHP_EOL . PHP_EOL;

 echo "El doble de X es: " . pow($X, 2) . PHP_EOL;
 echo "El doble de Y es: " . pow($Y, 2) . PHP_EOL;
 echo "El doble de N es: " . pow($N, 2) . PHP_EOL;
 echo "El doble de M es: " . pow($M, 2) . PHP_EOL . PHP_EOL;

 echo "La suma de todas las variables es: " . $X + $Y + $N + $M . PHP_EOL;
 echo "El producto de todas las variables es: " . $X * $Y * $N * $M . PHP_EOL;


 echo "\n\n********** CALCULADORA ************\n";
 enum operacion : string {
    case SUMA = "+";
    case RESTA = "-";
    case MULTIPLICACION = "*";
    case DIVISION = "/";
}

function calculator(int|float $num1, int|float $num2, operacion $operacion) : int|float {
    return match ($operacion) {
        operacion::SUMA => $num1 + $num2,
        operacion::RESTA => $num1 - $num2,
        operacion::MULTIPLICACION => $num1 * $num2,
        operacion::DIVISION => $num1 / $num2,
    };
};

$num1 = 120;
$num2 = 5;
$op = operacion::SUMA;

echo "$num1 + $num2 = " . calculator($num1, $num2, operacion::SUMA) . PHP_EOL;



?>