<?php
$arr = array(
    array("titulo" => "Cantora tranquiliza fãs", "icone" => "https://s2.glbimg.com/3J679TeMznBP0PN3NDakDFt6-ok=/347x5:923x329/540x304/smart/filters:strip_icc()/s01.video.glbimg.com/x720/9840789.jpg", "conteudo" => "Marília Mendonça testa positivo para Covid-19, tranquiliza fãs e cita importância da vacinação.", "link" => "https://g1.globo.com/pop-arte/noticia/2021/09/08/marilia-mendonca-testa-positivo-para-covid-19-tranquiliza-fas-e-cita-importancia-da-vacinacao.ghtml"),
    array("titulo" => "Luta contra o câncer", "icone" => "https://s2.glbimg.com/AhYcGE5-W8O5NLFNeEE-JUlLPOE=/0x1:620x350/540x304/smart/filters:strip_icc()/s2.glbimg.com/2lk8ebuRdC2YrSUnQnks_OaJoUs%3D/top/e.glbimg.com/og/ed/f/original/2021/09/08/image_IM1Nf0p.png", "conteudo" => "Morre Dudu Braga aos 52 anos após luta contra o câncer, Filho de Roberto Carlos lutava contra um câncer no peritônio desde setembro do ano passado", "link" => "https://revistaquem.globo.com/QUEM-News/noticia/2021/09/morre-dudu-braga-aos-52-anos-apos-luta-contra-o-cancer.html"),
    array("titulo" => "Nos tempos do imperador", "icone" => "https://s2.glbimg.com/vHam9j-U8ORg50zzheDmbMxso94=/0x0:1920x1080/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2021/O/F/7wsRFCRVWYC9yGMuttXw/pedro-ii-selton-mello-teresa-cristina-leticia-sabatella-confessa-nos-tempos-do-imperador.jpg", "conteudo" => "Pedro II dirá a esposa que esta apaixonado por Luísa", "link" => "https://gshow.globo.com/novelas/nos-tempos-do-imperador/vem-por-ai/noticia/nos-tempos-do-imperador-pedro-ii-dira-a-teresa-que-esta-apaixonado-por-luisa.ghtml"),
    array("titulo" => "Dias após Jogo", "icone" => "https://s2.glbimg.com/dTWHQ7F9PgexwA5qAGRtp8TtcDA=/240x0:1077x472/540x304/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/C/V/Ek5qaJSQKYMUrFx5GX9g/whatsapp-image-2021-09-08-at-18.54.10.jpeg", "conteudo" => "Site da anvisa é atacado por hackers que colocam a bandeira da argentina", "link" => "https://g1.globo.com/ciencia-e-saude/noticia/2021/09/08/site-da-anvisa-e-atacado-por-hackers-agencia-explica-que-dados-nao-foram-afetados.ghtml"),
    array("titulo" => "Dias de guerra", "icone" => "https://s2.glbimg.com/eaCtsKlPQRPFnLo9vxy3zftCWB0=/0x0:1086x611/540x304/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_9de6fd454d9849c8bee5b63069fbb074/internal_photos/bs/2021/I/A/91cx6WTdqKIFVH7mt8Vg/stf.jpg", "conteudo" => "Segurança do STF ganha reforço da tropa de elite da PF", "link" => "https://oglobo.globo.com/a-25189918?utm_source=globo.com&utm_medium=oglobo")

);
?>
<style>

.estilo{
    background-color: #d9d9d9;
    border-radius: 10px;
    color: black;    
}

</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <nav class="light-blue lighten-1 center" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">NEWS</a>
        </div>
    </nav>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <?php
                $news = Array();
                while(sizeof($news)<3){
                    $num = rand(0,sizeof($arr)-1);
                    if(!in_array($num,$news))
                        array_push($news,$num);
                }
                
                foreach ($news as $key => $num) {
                    $value = $arr[$num];
                ?>
                <a href="<?php echo $value["link"]; ?>">
                <div class=" estilo col s12 m4">
                        <div class="icon-block">
                        <h5 class="center"><?php echo $value["titulo"]; ?></h5>    
                        <h2 class="center light-blue-text"><i class="material-icons"><img class="responsive-img" src="<?php echo $value["icone"]?>"></i></h2> 
                        <p class="light"><?php echo $value["conteudo"]; ?></p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
            </div>
            <br><br>
        </div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>