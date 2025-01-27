<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Básico</title>
</head>
<body>
    <header><h1>Ejercicios en PHP</h1></header>
    <main>

        <h2>Ejercicios 1</h2>
        <?php
            $int = 30;
            $doub = 9.18;
            $string = "Hola Mundo";
            $bool = true;

            echo "Esta es una variable de tipo Integer = " . $int . "<br>";
            echo "Esta es una variable de tipo Double : "  . $doub . "<br>";
            echo "Esta es una variable de tipo String = " . $string . "<br>";
            echo "Esta es una variable de tipo booleana = " . $bool . "<br>";

            const mi_nombre = "Ivonne Cantor Páez";
            
            // Imprimir mi nombre con variables
            echo "<h2> Mi variable constantes es ";
            echo mi_nombre;
            echo "</h2>";
        ?>
        <h2>Ejercicios 2</h2>
        <?php
            $msg = "Hello, World!";

            echo $msg;

            echo "<br>";
            echo "Todo en mayusculas: " . strtoupper($msg) . "<br>";
            echo "La longitud de mi variable es de: " . strlen($msg) . "<br>";
            echo "Mi cadena en orden inverso queda: " . strrev($msg) . "<br>";

            $msg2 = "Aquest és el curs de PHP";

            echo "Así queda el mensaje si concateno los dos string: ";

            echo $msg . " " . $msg2;        
        ?>
        <h2>Ejercicios 3</h2>
        <?php
            $X = 9;
            $Y = 6;

            $N = 1.98;
            $M = 10.55;

            echo "El valor de X es: " . $X . "<br>";
            echo "El valor de Y es: " . $Y . "<br>";
            echo "X + Y = ". $X + $Y . "<br>";
            echo "X - Y = " . $X - $Y . "<br>";
            echo "X * Y = " . $X * $Y . "<br>";
            echo "El Modulo de X y Y es = " . $X % $Y . "<br><br>";

            echo "El valor de N es: " . $N . "<br>";
            echo "El valor de M es: " . $M . "<br>";
            echo "N + M = ". $N + $M . "<br>";
            echo "N - M = " . $N - $M . "<br>";
            echo "N * M = " . $N * $M . "<br>";
            echo "El Modulo de N y M es = " . $N % $M . "<br><br>";

            echo "El doble de X es: " . $X * $X . "<br>";
            echo "El doble de Y es: " . $Y * $Y . "<br>";
            echo "El doble de N es: " . $N * $N . "<br>";
            echo "El doble de M es: " . $M * $M . "<br>";
            echo "La suma de: X + Y + N + M = " . $X + $Y + $N + $M . "<br>";
            echo "El producto de: X * Y * N * M = " . $X * $Y * $N * $M . "<br>";
        ?>
        
        <h2>Calculadora</h2>
        <form action="calculadora.php" method="get">
        <fieldset>
            <legend>Escriba el primer número <br> escoja la operación <br> escriba el segundo número</legend>
            <label for="num1">Número 1</label>
            <input type="number" name="num1" required>
            <label for="ope">Operación</label>
            <select name="ope" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>                
            </select>
            <label for="num2">Número 2</label>
            <input type="number" name="num2" min="1" required>
            <input type="submit" value="Resultado">
        </fieldset>
    </form>
        <!-- <h2><a href="contador.php" target="_blank">Programa Contador Exercicio 4</a></h2> -->

    </main>
    
    
</body>
</html>