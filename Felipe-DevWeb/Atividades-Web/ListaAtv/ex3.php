<!-- Escreva uma função potencia(base, expoente) que, quando chamada, retorna baseexpoente. Por exemplo, potencia(3,4) deve retornar 81. -->

<?php
function potencia($x,$y){
    $aux=1;
    $i=0;
    while($i != $y){
        $aux = $aux * $x;
        $i++;
    }
    echo $aux;  
}
potencia(3,4);