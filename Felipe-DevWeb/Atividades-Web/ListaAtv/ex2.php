<!-- Escreva uma função que calcule e retorne a distância entre dois pontos (x1,y1) e (x2,y2). -->
<?php
function distancia($x1,$y1,$x2,$y2){
    echo sqrt((($x2-$x1)*($x2-$x1))+(($y2-$y1)*($y2-$y1)));
}
distancia(10,10,10,10);