<!-- Faça uma função que receba um valor inteiro e positivo e calcula e retorne o seu fatorial. Não utilize funções prontas de fatorial. -->
<?php
function Fatorial($Numero)
{
    if (is_int($Numero)) {
        if ($Numero > 0) {
            for ($Fatorial = 1; $Numero > 1; $Numero = $Numero - 1) {
                $Fatorial = $Fatorial * $Numero;
            }
            echo " O fatorial do numero é de: " . $Fatorial;
        }
    }
}
Fatorial(5);
