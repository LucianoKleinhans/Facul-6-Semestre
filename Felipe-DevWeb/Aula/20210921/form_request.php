<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Calculo IMC</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Peso: <input type="text" name="peso">
        <br>
        Altura: <input type="text" name="altura">
        <br><input type="submit">
    </form>
    <?php
        if(isset($_REQUEST['peso'])&&($_REQUEST['altura'])){
            $peso = $_REQUEST['peso'];
            $altura = $_REQUEST['altura'];
            $imc = $peso/($altura*$altura);
            echo "<h1> Caculo IMC:".$imc."</h1>";
        }
    ?>
</body>
</html>