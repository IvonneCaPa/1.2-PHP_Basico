<?php

    function calculateDegree(int $note) : string {
        if($note >= 60){
            return "Su grado es Primera División";
        } elseif ($note >= 45 && $note <= 59) {
            return "Su grado es Segunda División";
        } elseif ($note >= 33 && $note <= 44) {
            return "Su grado es Tercera División";
        } elseif ($note <33) {
            return "Ha reprobado";
        } else {
            return "Ha introducido una nota incorrecta\n";
        }    
    }

    echo calculateDegree(65) . PHP_EOL;


?>