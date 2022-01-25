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
        echo "Valor $i: <input type='number' name='v$i' max='100' min='0' value='0'/><br/>";
        $i++;
      }
      ?>
      <input type='submit' value='Enviar' class='botao' />
    </form>

  </div>
</body>

</html>