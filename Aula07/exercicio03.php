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
        echo "As notas são $n1 e $n2";
       $media= ($n1+$n2)/2;
       echo "<br/>A media foi: $media";
       echo "<br/>A situação é: ". (($media >= 6)?"Aprovado":"Reprovado");
       


        ?>
    </div>
</body>

</html>