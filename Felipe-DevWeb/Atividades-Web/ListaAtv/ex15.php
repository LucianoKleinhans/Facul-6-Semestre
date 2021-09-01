<!-- Faça uma função que receba um valor inteiro e positivo e calcula e retorne o seu fatorial. Não utilize funções prontas de fatorial. -->
<?php
function Fatorial($numero)
{
    if (is_int($numero)) {
        if ($numero > 0) {
            for ($fatorial = 1; $numero > 1; $numero = $numero - 1) {
                $fatorial = $fatorial * $numero;
            }
            echo " O fatorial do numero ' ".$numero." ' é de: ".$fatorial;
        }
    }
}
Fatorial(5);
