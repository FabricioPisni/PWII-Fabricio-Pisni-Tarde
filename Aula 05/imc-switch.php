<?php
    $peso = 150;
    $altura = 1.80;

    $imc = $peso / ($altura * $altura);

    switch ($imc) {
        case $imc < 18.5:
            echo "Magreza";
            break;
        case $imc >= 18.5 && $imc < 25:
            echo "Normal";
            break;
        case $imc >= 25 && $imc < 30:
            echo "Obesidade grau I";
            break;
        case $imc >= 30 && $imc < 40:
            echo "Obesidade grau II";
            break;
        case $imc >= 40:
            echo"Obesidade grau III";
            break;
        default:
            echo "valor inválido";
    }