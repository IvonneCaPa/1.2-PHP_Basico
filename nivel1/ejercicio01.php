<?php

    $int = 5;
    $doub = 5.2;
    $msg = "Soy una variable string";
    $bool = true;

    echo "La variable de tipo integer tiene un valor de: $int\n";

    echo "La variable de tipo double tiene un valor de: $doub\n";

    echo "La variable de tipo string tiene un valor de: $msg\n";

    echo "La variable de tipo booleana tiene un valor de: $bool\n";

    define("NOMBRE", "Ivonne");

    echo "\nMi nombre es: " . PHP_EOL . NOMBRE . PHP_EOL;

?>