<!DOCTYPE html>
<style>
.form{
    background-color: #d9d9d9;
    border-radius: 10px;
    color: black;
    padding-left: 20%;
    padding-right: 20%;
}
.text{
    color: blue;
}
</style>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h1 class="center text">Calculo IMC</h1>
        <div class="center form">
            <br>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                Peso: <input type="text" name="peso">
                <br>
                Altura: <input type="text" name="altura">
                <br><br>
                <!-- Sexo:
                <p>
                    <label>
                        <input type="checkbox" name="masculino">
                        <span>Masculino</span>
                    </label>
                    <label>
                        <input type="checkbox" name="feminino"/>
                        <span>Feminino</span>
                    </label>
                </p> -->
                <input type="submit">
                <br><br>
            </form>
        </div>
        <?php
            //if(isset($_REQUEST['masculino'])){
                if(isset($_REQUEST['peso'])&&($_REQUEST['altura'])){
                    $peso = $_REQUEST['peso'];
                    $altura = $_REQUEST['altura'];
                    $imc = $peso/($altura*$altura);
                    echo "Peso informado: ".$peso;
                    echo "<br>Altura informada: ".$altura;
                    echo "<p>Calculo IMC :".$imc."</p>";
                    if($imc<18.5){
                        echo "MAGREZA";
                    }if(($imc>=18.5)&&($imc<24.9)){
                        echo "SAUDÁVEL";
                    }if(($imc>=24.9)&&($imc<29.9)){
                        echo "SOBREPESO";
                    }if(($imc>=29.9)&&($imc<34.9)){
                        echo "OBESIDADE GRAU I";
                    }if(($imc>=34.9)&&($imc<39.9)){
                        echo "OBESIDADE GRAU II";
                    }if(($imc>34.9)){
                        echo "OBESIDADE GRAU III";
                    }
                }
            // }else if(isset($_REQUEST['feminino'])){
            //     if(isset($_REQUEST['peso'])&&($_REQUEST['altura'])){
            //         $peso = $_REQUEST['peso'];
            //         $altura = $_REQUEST['altura'];
            //         $imc = $peso/($altura*$altura);
            //         echo "Peso informado: ".$peso;
            //         echo "Altura informada: ".$altura;
            //         echo "<p>Caculo IMC Feminino:".$imc."</p>";
            //         if($imc<18.5){
            //             echo "MAGREZA";
            //         }if(($imc>=18.5)&&($imc<24.9)){
            //             echo "SAUDÁVEL";
            //         }if(($imc>=24.9)&&($imc<29.9)){
            //             echo "SOBREPESO";
            //         }if(($imc>=29.9)&&($imc<34.9)){
            //             echo "OBESIDADE GRAU I";
            //         }if(($imc>=34.9)&&($imc<39.9)){
            //             echo "OBESIDADE GRAU II";
            //         }if(($imc>34.9)){
            //             echo "OBESIDADE GRAU III";
            //         }
            //     }
            // }else{
            //     echo '<p class="center">SELECIONE O SEXO</p>';
            // }
        ?>
    </div> 
</body>
</html>