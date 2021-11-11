<?php 

$server = "localhost";
$user = "root";
$pass = "";
$mydb = "test";

$conn = new mysqli($server,$user,$pass,$mydb);

if($conn->connect_error){
    die("Conexão Falhou: ".$conn->connect_error);
}

// $sql = "SELECT * FROM usuarios";
// $result = $conn->query($sql);

// if($result->num_rows>0){
//     while($row = $result->fetch_assoc()){
//         $senha = $row["senha"];

//         for($i=0;$i<strlen($senha);$i++){
//             $senha[$i]="*";
//         }

//         echo "<h3>Nome: ".$row["nome"]." - Usuario: ".$row["usuario"]." - Senha ".$senha."</h3>";
//     }
// }else{
//     echo "<h3>Nenhum Registro Encontrado</h3>";
// }
