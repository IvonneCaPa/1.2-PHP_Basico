<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="resultado">
        <?php
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $ope = $_GET['ope'];

            function calculator($num1, $num2, $ope){
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
            
            $result = calculator($num1, $num2, $ope);
            echo "<p>";
            echo "El resultado es: $result";
            echo "</p>";
        ?>
    </div>
    
    <a href="index.php">Volver</a>
    </div>
    </div>


    
   
</body>
</html>