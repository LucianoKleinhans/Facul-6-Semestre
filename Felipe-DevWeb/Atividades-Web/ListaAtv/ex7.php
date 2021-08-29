<!-- Faça uma função que recebe um valor inteiro e verifica se o valor é par. A função deve retornar 1 se o número for par e 0 se for ímpar. -->

<?php
function ParImpar($num){
    if($num %2==0){
        echo " '1'  -  O Numero '".$num."' é PAR";
    }else{
        echo " '0'  -  O Numero '".$num."' é IMPAR";
    }
}
ParImpar(1);