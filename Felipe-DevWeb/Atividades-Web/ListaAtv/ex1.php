<!-- Escreva uma função que receba dois números inteiros retorne o menor número -->
<?php
function recebe($x,$y){
    if($x < $y){
        echo $x;
    }else{
        echo $y;
    }
}
recebe(1,2);