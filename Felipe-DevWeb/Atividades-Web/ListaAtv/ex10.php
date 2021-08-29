<!-- Faça uma função que recebe por parâmetro um valor inteiro e positivo e retorna o valor lógico Verdadeiro caso o valor seja primo e Falso em caso contrário. -->
<?php
function VerdadeiroFalso($num)
{
    $count = 0;
    if ($num >= 0) {
        if (is_int($num)) {
            echo "O numero '" . $num . "' eh inteiro <br/>"; 
            for ($i = 2; $i <= $num / 2; $i++) {
                if ($num % $i == 0) {
                    $count++;
                }
            }
            if ($count == 0) {
                echo " VERDADEIRO - O numero '" . $num . "' eh Primo";
            } else {
                echo " FALSO - O numero '" . $num . "' nao eh Primo";
            }
        } else {
            echo "O numero '" . $num . "' eh decimal";
        }
    } else {
        echo "O numero '" . $num . "' eh negativo";
    }
}
VerdadeiroFalso(5);
