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
        $x=[1,2,3,4];
        print_r($x);
        $x2= array(3,6,8,7,4);
        echo"<br/>";
        print_r($x2); // var_dump() ou var_export()
        echo"<br/>";
        var_dump($x2);
        echo"<br/>";
        var_export($x2);
    ?>
</div>
</body>
</html>
 