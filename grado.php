<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tu grado es:</title>
</head>
<body>
    <div class="resultado">
        <?php
            $nota = $_GET['nota'];

            function grado($nota){
                $mensaje = " ";

                if($nota >= 60){
                    $mensaje = "Estas en Primera División";
                } else if($nota >= 45){
                    $mensaje = "Estas en Segunda División";
                } else if($nota >= 33){
                    $mensaje = "Estas en Tercera División";
                } else if($nota < 33){
                    $mensaje = "Has Reprobado";
                } else{
                    $mensaje = "Has introducido una nota incorrecta";
                }
                
                return $mensaje;
            }
            
            echo grado($nota);
        ?>
    </div>
    
    <a href="index.php">Volver</a>
    </div>
    </div>


    
   
</body>
</html>