<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Aula 06</title>
</head>

<body>
    <div>
        <?php

        $preco = $_GET["p"];
        $preco2 = $preco;
        echo "O preço do produto é R$" . number_format($preco, 2, ",", ".");
        $preco += $preco * 10 / 100;
        echo "<br/>O novo preço do produto com 10% de aumento é R$" . number_format($preco, 2, ",", ".");
        $preco2 -= $preco2 * 10 / 100;
        echo "<br/>O novo preço do produto com 10% de desconto é R$" . number_format($preco2, 2, ",", ".");
        ?>
    </div>
</body>

</html>