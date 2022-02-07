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
    $c = 0;
    $r=10;
    do {
      echo "$c, ";
      $c++;
     
    } while ($c < 10);
    do {
      

      $r--;
      echo "$r, ";
    } while ($r > 0);
    ?>


  </div>
</body>

</html>