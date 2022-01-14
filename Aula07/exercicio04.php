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


        $idade = $_GET["idade"];
        
        echo "A idade é:  $idade";
       echo "<br/>O voto é: ". (($idade < 18 || $idade > 70)?"Não obrigatório":"Obrigatório");
       


        ?>
    </div>
</body>

</html>