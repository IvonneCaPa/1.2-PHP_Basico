<?php

    function pay(int $call):string {
        if ($call < 3){
            $a = "Su llamada de $call minutos ha costado 10 centimos". PHP_EOL;
        } else {
            $call2 = (($call - 3) * 5) + 10;
            $a = "Su llamada de $call minutos ha costado $call2 centimos" . PHP_EOL;
        }
        return $a;
    }
    echo pay(22);
?>