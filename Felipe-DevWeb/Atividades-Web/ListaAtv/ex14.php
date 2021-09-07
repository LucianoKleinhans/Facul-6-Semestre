<!-- Faça uma função que recebe, por parâmetro, a altura (alt) e o sexo de uma pessoa e retorna o seu peso ideal. Para homens, calcular o peso ideal usando a fórmula peso ideal = 72.7 x alt - 58 e, para mulheres, peso ideal = 62.1 x alt - 44.7. -->
<?php
function Peso($alt, $sexo)
{
    $formula = 0;
    switch ($sexo) {
        case 'M' || 'm':
            $formula = 72.7 * $alt - 58;
            echo "O peso ideal para o sexo masculino cuja sua altura seja de ' ".$alt."m ' é de: ' " . ($formula) . " ' Kg";
        break;
        case 'F' || 'f':
            $formula = 62.1 * $alt - 44.7;
            echo "O peso ideal para o sexo feminino cuja sua altura seja de ' ".$alt."m ' é de: ' " . ($formula) . " ' Kg";
        break;
        default:
            echo "Sexo ' ".$sexo." ' inexistente!";
        break;
    }
}
Peso(1.80, 'M');
