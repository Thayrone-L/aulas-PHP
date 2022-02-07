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
        function teste (&$x){
            $x+=2;
            echo"o valor de x é $x";
        }
        $a=3;
        teste($a);
        echo"<br/>O valor de a é $a"; 

    ?>
</div>
</body>
</html>
 