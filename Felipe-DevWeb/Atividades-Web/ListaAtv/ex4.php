<!-- Escreva uma função que receba um array e retorne o array ordenado. Não utilize funções prontas de ordenação. -->

<?php
function RecebeArray($arr){
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    print_r($arr);
}
$arr=array(35,70,1,9,6,25,12);
RecebeArray($arr);