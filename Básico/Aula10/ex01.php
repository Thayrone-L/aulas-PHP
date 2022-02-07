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
    $n = isset($_GET["num"]) ? $_GET["num"] : 0;
    $o = isset($_GET["opr"]) ? $_GET["opr"] : 1;
    switch ($o) {
      case '1':
        $r = $n * 2;
        break;
      case '2':
        $r = $n ^ 3;
        break;
      case '3':
        if ($n == 0) {
          $r = "Não existe raiz de 0";
        } else {
          $r = sqrt($n);
        }
        break;
    }
    echo "O resultado da operação foi <strong>$r</strong>";
    ?>
    <br />
    <br />
    <br />
    <a href="ex01.html">Voltar</a>
  </div>
</body>

</html>