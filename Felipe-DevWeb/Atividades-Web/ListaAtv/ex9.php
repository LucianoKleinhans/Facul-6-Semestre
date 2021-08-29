<!-- Faça uma função que recebe por parâmetro o raio de uma esfera e calcula o seu volume (v=4.P.R33). -->

<?php
function CalcVolume($raio){
    $volume = 0;
    $pi = 3.14159265359;
    echo "O Volume da esfera cujo o seu raio eh de '".$raio."' eh : ". $volume = (4*$pi*$raio)/3;
}

CalcVolume(10);