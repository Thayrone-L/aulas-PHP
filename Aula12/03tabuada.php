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

    $v = isset($_GET["num"]) ? $_GET["num"] : 1;
    $i =0;
    do {
$r=$v * $i;
      echo "$v X $i = $r <br/>";
      $i++;
    } while ($i <= 10);
    
    echo "<a href='index.html'/>"
    ?>


  </div>
</body>

</html>