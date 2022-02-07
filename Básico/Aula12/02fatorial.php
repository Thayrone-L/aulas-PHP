<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>


    <?php

    $v = isset($_GET["val"]) ? $_GET["val"] : 1;
    $i = $v;
    $fat = 1;
    do {

      $fat = $fat * $i;
      $i--;
    } while ($i >= 1);
    echo "<h2>$v! = $fat</h2>";
    echo "<a href='02fatorial.html'/>"
    ?>


  </div>
</body>

</html>