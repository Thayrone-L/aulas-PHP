<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="_css/estilo.css"/>
    <title>Document</title>
</head>
<body>
    <div>
    <?php

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1+$n2)/2;
        echo "Valor de n1: ".$n1." e Valor de n2: ".$n2;
        echo "<br/>A soma vale: ".($n1+$n2);
        echo "<br/>A subtração vale: ".($n1-$n2);
        echo "<br/>A multiplicação vale: ".($n1*$n2);
        echo "<br/>A Divisão vale: ".($n1/$n2);
        echo "<br/>O modulo vale: ".($n1%$n2);
        echo "<br/>A media vale: ".($m);

    ?>
    </div>
</body>
</html>