<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h1 class="center text">Login</h1>
        <div class="center form">
            <br>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                Usuário: <input type="text" name="user">
                <br>
                Senha: <input type="password" name="senha">
                <br>
                <button id="btSubmit" class="waves-effect waves-light btn" type="submit">Enviar</button>
                <!-- <input type="submit"> -->
                <br><br>
            </form>
        </div>
        <?php
            if(isset($_REQUEST['luciano'])&&($_REQUEST['123'])){
                echo "passou";   
            }
            // if(isset($_REQUEST['masculino'])){
            //     if(isset($_REQUEST['peso'])&&($_REQUEST['altura'])){
            //         $peso = $_REQUEST['peso'];
            //         $altura = $_REQUEST['altura'];
            //         $imc = $peso/($altura*$altura);
            //         echo "<p>Calculo IMC Masculino:".$imc."</p>";
            //     }
            // }else if(isset($_REQUEST['feminino'])){
            //     if(isset($_REQUEST['peso'])&&($_REQUEST['altura'])){
            //         $peso = $_REQUEST['peso'];
            //         $altura = $_REQUEST['altura'];
            //         $imc = $peso/($altura*$altura);
            //         echo "<p>Caculo IMC Feminino:".$imc."</p>";
            //     }
            // }else{
            //     echo '<p class="center">SELECIONE O SEXO</p>';
            // }
        ?>
    </div> 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    //$(function).click()
</script>

</html>