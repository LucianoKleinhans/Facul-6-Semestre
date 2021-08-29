<!-- Escreva uma função que receba 3 notas de um aluno e uma letra. Se a letra for A a função retorna a média aritmética das notas do aluno, se for P, a sua média ponderada (pesos: 5, 3 e 2) e se for H, a sua média harmônica. -->

<?php
function media($n1,$n2,$n3,$letra){
    if($letra=="a"){
        echo (($n1+$n2+$n3)/3);
    }else{
        if($letra=="p"){
            echo (($n1*5)+($n2*3)+($n3*2))/(5+3+2);
        }else{
            if($letra=="h"){
                echo ((3)/((1/$n1)+(1/$n2)+(1/$n3)));
            }
        }
    }
}
media(10,10,10,"h");