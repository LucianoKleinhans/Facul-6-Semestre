<?php
session_start();
$i=0;
function logoutq($i){
    
    if($i != 0){
        session_destroy();
        header('Location: login.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>logout</title>
</head>
<body>
<div class="container center">
    <h1>OLÁ</h1>
    <button class="waves-effect waves-light btn" onclick="<?php $i=1;logoutq($i);?>" >LOGOUT</button>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
<?php

?>