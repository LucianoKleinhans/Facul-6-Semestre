<?php

include_once("bd.php");



$sqlq = "UPDATE usuarios SET nome = 'richarlison' WHERE nome = 'luciano' ";
$conn->query($sqlq);

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $senha = $row["senha"];

        for($i=0;$i<strlen($senha);$i++){
            $senha[$i]="*";
        }

        echo "<h3>Nome: ".$row["nome"]." - Usuario: ".$row["usuario"]." - Senha ".$senha."</h3>";
    }
}else{
    echo "<h3>Nenhum Registro Encontrado</h3>";
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $tabela = filter_input(INPUT_GET, "tabela", FILTER_SANITIZE_SPECIAL_CHARS);
    $coluna = isset($_GET['coluna']) ? filter_input(INPUT_GET, "coluna", FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $valor = isset($_GET['valor']) ? filter_input(INPUT_GET, "valor", FILTER_SANITIZE_SPECIAL_CHARS) : '';
}

$sql = "SELECT * FROM $tabela ";
$sql .= $coluna != "" ? "WHERE $coluna='$valor'" : "";

$result = $conn->query($sql);
$arr = [];
$cont = 0;
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arr[$cont++] = $row;
        }
    }
}
echo json_encode($arr);
;
// $sql = " INSERT INTO usuarios (nome,usuario,senha) VALUES ('Felipe','fpp','fpp')";


