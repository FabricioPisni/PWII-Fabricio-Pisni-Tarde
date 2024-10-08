<?php
    $peso = 80;
    $altura = 1.80;

    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5){
        echo "Magreza";
    }elseif ($imc >= 18.5 && $imc < 25){
        echo "Normal";
    }elseif ($imc >= 25 && $imc < 30){
        echo "Obesidade grau I";
    }elseif ($imc >= 30 && $imc < 40){
        echo "Obesidade grau II";
    }elseif ($imc >= 40){
        echo "Obesidade grau III";
    }else{
        echo "valor inválido";
    }