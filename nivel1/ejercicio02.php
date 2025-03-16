<?php

    /**. Imprime por pantalla el string en orden inverso de caracteres. Crea una nueva variable con el contenido "Este es el curso de PHP" e imprime por pantalla la concatenación de ambos strings. */

    $msg = "Hello, World!";
    echo $msg . PHP_EOL;

    $msgCapital =  strtoupper($msg);
    echo "Mensaje con los caracteres en mayúscula: $msgCapital\n";

    echo "La longitud de la variable es de: " . strlen($msg) . " caracteres" . PHP_EOL;

    echo 'El string en orden inverso es: ' . strrev($msg) . PHP_EOL;

    $msg2 = "Este es el curso de PHP\n";

    echo $msg . " " . $msg2 . PHP_EOL;




?>