<?php

$par_ou_impar = array(2, 5, 7, 8, 10, 18, 30, 37, 38, 60);

for ($i = 0; $i < count($par_ou_impar); $i++) {

    if ($par_ou_impar[$i] % 2 == 0){
    echo "Número Par: $par_ou_impar[$i] <br />";
    }else{ 
    echo "Número Impar:  $par_ou_impar[$i] <br />";
    }
}