
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>login</title>
</head>
<body>
<div class="container">
        <h1 class="center text">LOGIN</h1>
        <div class="center form">
            <br>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                Usuário: <input type="text" name="user">
                <br>
                Senha: <input type="password" name="senha">
                <br>
                <button id="btSubmit" class="waves-effect waves-light btn" type="submit" onclick="<?php login(); ?>"
                >ENVIAR</button>
                <br><br>
            </form>
        </div>
        <?php echo $_SESSION["usuario"];?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
<?php

function login(){
    session_start();
    if (isset($_SESSION['usuario'])&&($_SESSION['password'])) {   
        header('Location: logout.php');    
    }else{
        $_SESSION["usuario"]=$_REQUEST['user'];
        $_SESSION["password"]=$_REQUEST['senha'];
    }if (isset($_SESSION['usuario'])&&($_SESSION['password'])) {   
        header('Location: logout.php');    
    }
}
    // $_SESSION["user"]=$_REQUEST['user'];
    // $_SESSION["senha"]=$_REQUEST['senha'];
?>


