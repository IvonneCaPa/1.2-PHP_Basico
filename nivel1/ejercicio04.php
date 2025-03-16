<?php
    $num = 12;
    $cont = 3;

    function counter(int $cont, int $num = 10) : string {
        $result = "";
        for ($i=0; $i<=$num; $i+=$cont) {
                $result .= "$i \n";
            }
        return $result;
    }

    echo counter(2);

    echo PHP_EOL . counter(4,12);
     




?>