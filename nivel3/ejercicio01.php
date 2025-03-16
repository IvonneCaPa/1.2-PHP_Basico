<?php

    $num = 30;
    $arrayPrimos = [];
    $arrayBase = [];
    $arrayOk=[];
    $X= 0;

    for ($i=3; $i<=$num; $i+=2) { 
        array_push($arrayBase, $i);
    }
    array_push($arrayPrimos, 2);

    do {
        $X = 3;
        if(($X*$X)<=$num){
            for($j=$X; $j<count($arrayBase); $j++){
                unset($arrayBase[$j]);
            }
            array_push($arrayPrimos, $arrayBase[0]);
            array_shift($arrayBase);
            array_values($arrayBase);
        }
        $X = $arrayBase[0];
    } while ($X*$X <= $num);
    
    $arrayOK = array_merge($arrayPrimos, $arrayTodos);

    print_r($arrayOK);
?>
