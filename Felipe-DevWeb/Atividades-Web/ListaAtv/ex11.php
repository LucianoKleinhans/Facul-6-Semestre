<!-- Faça uma função que recebe por parâmetro o tempo de duração em segundos e retorna também por parâmetro esse tempo em horas, minutos e segundos. -->
<?php
function HHMMSS($EntradaSegundos)
{
    $Horas = 0;
    $Minutos = 0;
    $Segundos = 0;
    echo intval($Horas = $EntradaSegundos / 3600) . ":";
    echo intval($Minutos = ($EntradaSegundos % 3600) / 60) . ":";
    echo intval($Segundos = ($EntradaSegundos % 3600) % 60);
}

HHMMSS(5602);
