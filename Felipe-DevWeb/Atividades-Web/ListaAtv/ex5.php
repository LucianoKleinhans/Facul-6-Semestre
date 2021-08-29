<!-- Escreva uma função que receba um número inteiro retorne um array contendo todos seus divisores (exceto ele mesmo). -->

<?php
function RecebeNumIntRetornaArrayDivisores($num){ 
    $count=0;
    for($i=1;$i<$num;$i++)
    {
        if($num%$i==0){
            $arr[$i]=$i;
        }
    }
    print_r($arr);
}
RecebeNumIntRetornaArrayDivisores(10);