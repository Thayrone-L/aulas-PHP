<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <form method="GET" action="02parte2.php">
      <?php
      $i = 1;
      while ($i <= 5) {
       $v= "num".$i;
       $url = "v".$i;
       $$v = isset($_GET[$url])?$_GET[$url]: 0;
       $i++;
      }
      $i = 1;
      while ($i <= 5) {
        $v= "num".$i;
        echo"Valor $i: ". $$v ."<br/>";
        $i++;
       }
      
      ?>
      <a href="javascript: history.go (-1)" class='botao'>Voltar</a>
    </form>

  </div>
</body>

</html>