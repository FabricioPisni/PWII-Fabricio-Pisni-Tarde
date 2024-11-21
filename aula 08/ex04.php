<?php

    $valorUm = 11;
    $valorDois = 90; 

    if($valorDois < $valorUm) {
        for($contador = $valorUm; $contador >= $valorDois; $contador--) {
            echo $contador, "<br>";
        }
    }else {
        for($contador = $valorDois; $contador >= $valorUm; $contador--) {
            echo $contador, "<br>";
        }
    }

 ?>