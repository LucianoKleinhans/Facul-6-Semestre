<!-- Faça uma função que recebe a idade de uma pessoa em anos, meses e dias e retorna essa idade expressa em dias. -->

<?php
function IdadeEmDias($idadeAnos, $idadeMeses, $idadeDias)
{

    $anosDias = 0;
    $mesesDias = 0;
    $anosDias = $idadeAnos * 365;
    $mesesDias = $idadeMeses * 30;

    echo "O total da idade expressa em dias eh : ' ".$idadeDias = $anosDias + $mesesDias + $idadeDias." ' dias";
}

IdadeEmDias(10, 2, 1); // 3711 dias
