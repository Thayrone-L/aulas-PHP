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


        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores são $n1 e $n2";
       $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
       $t = ($tipo == "s")?"Soma":"Multiplicação";
       echo "<br/>A operação foi: $t";
       echo "<br/>o resultado foi: $r";
       


        ?>
    </div>
</body>

</html>