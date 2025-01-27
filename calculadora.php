<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <div class="container">
    <form action="#" method="get">
        <fieldset>
            <legend>Escriba el primer número <br> escoja la operación <br> escriba el segundo número</legend>
            <label for="num1">Número 1</label>
            <input type="number" name="num1" required><br>
            <select name="ope" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>                
            </select><br>
            <label for="num2">Número 2</label>
            <input type="number" name="num2" min="1" required>
            <input type="submit" value="Igual">
        </fieldset>
    </form>
    <div class="resultado">
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $ope = $_GET['ope'];

        function calculadora($num1, $num2, $ope){
            $resultado = 0;
            if($ope == "+"){
                $resultado = $num1 + $num2;
            } else if($ope == "-"){
                $resultado = $num1 - $num2;
            } else if($ope == "*"){
                $resultado = $num1 * $num2;
            } else if($ope = "/"){
                $resultado = $num1 / $num2;
            } else{
                $resultado = "Has cometido algún error";
            }
            return $resultado;
        }
        
        $result = calculadora($num1, $num2, $ope);
        echo "El resultado es: $result";
    ?>
    </div>
    </div>


    
   
</body>
</html>