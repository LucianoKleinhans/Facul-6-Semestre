<?php

    $produtos = $_REQUEST['produtos'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto MVC</title>
</head>
<body>
    <table>
        <tr>
            <th>CodProduto</th>
            <th>NomeProduto</th>
            <th>PrecoProduto</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto["CODPROD"];?></td>
                <td><?php echo $produto["DESCRICAO"];?></td>
                <td><?php echo $produto["VALOR_UN"];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>