<!-- Faça uma função que recebe um valor inteiro e verifica se o valor é positivo, negativo ou zero. A função deve retornar 1 para valores positivos, -1 para negativos e 0 para o valor 0. -->

<?php

function recebeNumero($num){
    if($num > 0){
        echo "1 - O numero '".$num."' é positivo";
    }else{
        if($num < 0){
            echo "2 - O numero '".$num."' é negativo";
        }else{
            echo "3 - O numero é '".$num."'";
        }
    }
}
recebeNumero(0);
