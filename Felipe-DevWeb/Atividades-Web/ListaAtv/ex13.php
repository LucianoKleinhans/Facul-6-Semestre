<!-- Faça uma função que verifique se um valor é perfeito ou não. Um valor é dito perfeito quando ele é igual a soma dos seus divisores excetuando ele próprio. (Ex: 6 é perfeito, 6 = 1 + 2 + 3, que são seus divisores). A função deve retornar um valor booleano. -->
<?php
function Perfeito($numero)
{
    for ($i = 1; $i < 10; $i++) {
        $somaDivisores = 0;
        for ($j = 1; $j < $numero; $j++) {
            if ($numero % $j == 0) {
                $somaDivisores = $somaDivisores + $j;
            }
        }
    }
    if ($somaDivisores == $numero) {
        echo "O numero ' ".$numero." ' é perfeito";
    } else {
        echo "O numero ' ".$numero." ' não é perfeito";
    }
}
Perfeito(6);
