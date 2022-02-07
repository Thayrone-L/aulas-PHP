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
    $i=1;
        while( $i<=10){
          if($i==10){
            echo "$i. ";
          }else{
          echo "$i, ";
          
          }
          $i++;
        }
    ?>
</div>
</body>
</html>
 