<!DOCTYPE html>
<html>

<head>
  <?php

  $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
  $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
  $media = ($nota1 + $nota2) / 2;

  if ($media <= 5) {

    $situacao = "Reprovado";
    $cor = "#FF0000";
  } elseif ($media > 5 && $media < 7) {

    $situacao = "Aprovado, mas pode melhorar!";
    $cor = "	#FFFF00";
  } else {
    $situacao = "Aprovado! Parabéns!";
    $cor = "	#008000";
  }

  ?>

  <style type='text/css'>
    span.notas {

      color: <?php echo $cor; ?>;

    }
  </style>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <?php
    echo "<span class='notas'>$situacao</span>";
    ?>
    <br/>
    <br/>
    <br/>
    <a href="exercicio03.html">Voltar</a>
  </div>
  <script type="text/javascript" src="exercicio03.js"></script>
</body>

</html>