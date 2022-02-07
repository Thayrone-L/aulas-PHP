<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        echo "O valor enviado foi $valor a sua raiz é:".number_format(sqrt($valor),2);
    ?>
    <a href="exercicio01.html"><br/>Voltar</a>
</div>
</body>
</html>
 