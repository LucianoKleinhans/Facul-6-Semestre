----------------------------------exercicio 13----------------------------------<br>
<!-- exercicio 13 -->
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
?>
<br>----------------------------------exercicio 14----------------------------------<br>
<!-- exercicio 14 -->
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
?>
<br>----------------------------------exercicio 15----------------------------------<br>
<!-- exercicio 15 -->
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
