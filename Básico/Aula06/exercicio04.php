<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="_css/estilo.css"/>
    <title>Aula 06</title>
</head>
<body>
    <div>
    <?php

    $x = "abc";
    $$x= "def";
    echo "O valor de x é $x";
    echo "<br/>O valor de x de x é: ".$$x ;


    ?>
    </div>
</body>
</html>