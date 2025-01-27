<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="#" method="get">
        <fieldset>
            <legend>Calculadora</legend>
            <label for="num1">Número 1</label>
            <input type="number" name="num1" id="">
            <select name="ope" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>                
            </select>
            <label for="num2">Número 2</label>
            <input type="number" name="num2">
            <input type="submit" value="Igual">
        </fieldset>
    </form>
    <div>
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

    
   
</body>
</html>