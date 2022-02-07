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
        function soma ($a,$b){
            $s = $a + $b;
            echo "<p>O valor da soma é $s</p>";
        }
        $x = 15;
        $y=27;
        soma(15,27);
    ?>
</div>
</body>
</html>
 