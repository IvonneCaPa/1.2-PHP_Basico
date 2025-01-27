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

            function contador($num1, $num2){
        
                for ($x = 0; $x <= $num1; $x+=$num2) {
                    echo "El número es : $x <br>";
                  }                 
            }
            
            $result = contador($num1, $num2);
        ?>
    </div>
    
    <a href="index.php">Volver</a>
    </div>
    </div>


    
   
</body>
</html>