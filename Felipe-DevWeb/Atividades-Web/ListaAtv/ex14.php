<!-- Faça uma função que recebe, por parâmetro, a altura (alt) e o sexo de uma pessoa e retorna o seu peso ideal. Para homens, calcular o peso ideal usando a fórmula peso ideal = 72.7 x alt - 58 e, para mulheres, peso ideal = 62.1 x alt - 44.7. -->
<?php
$formula;
function Peso($Alt, $Sexo)
{
    if ($Sexo == 'M') {
        $formula = 72.7 * $Alt - 58;
        echo "O peso ideal é de: " . intval($formula);
    } else {
        if ($Sexo == 'F') {
            $formula = 62.1 * $Alt - 44.7;
            echo "O peso ideal é de: " . intval($formula);
        } else {
            echo "Sexo inexistente";
        }
    }
}
Peso(1.71, 'j');
