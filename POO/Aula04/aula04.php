<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>

<body>


    <?php

    require_once "caneta.php";

    $c1 = new Caneta;
    $c1->cor = "Azul";
    //$c1->ponta = "0.5";
    //$c1->tampada = "false";

    print_r($c1);

    $c1->rabiscar();
    echo"<br/>";
    $c1->status();

    ?>

</body>

</html>