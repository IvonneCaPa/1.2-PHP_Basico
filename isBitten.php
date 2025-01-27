<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Te han mordido el dedo</title>
</head>
<body>
    <form>
        <?php
            function isBitten(){
                $mordido = rand(0, 1);
                if($mordido == 1){
                    return true;
                } else {
                    return false;
                }
            }
            
            if(isBitten()){
                echo "Charly te ha mordido el dedo 😿";
            } else {
                echo "Charly no te ha mordido el dedo 😺";
            }
        ?>
        <br>
        <input type="submit" value="Volver a intentar">
    </form>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>