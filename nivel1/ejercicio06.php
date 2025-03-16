<?php
/**Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo. Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario. */

    function isBitten() : bool {
        if(rand(0,1) == 1){
            return true;
        } else {
            return false;
        }
    }

    if(isBitten() == true){
        echo "Charly me ha mordido el dedo";
    } else {
        echo "Charly no me ha mordido el dedo";
    }




?>