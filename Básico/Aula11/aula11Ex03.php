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

    function alerta($msg)
    {
    }

    $ini = isset($_GET["ini"]) ? $_GET["ini"] : 0;
    $fim = isset($_GET["fim"]) ? $_GET["fim"] : 0;
    $step = isset($_GET["step"]) ? $_GET["step"] : 0;
    if ($ini == $fim) {
      echo "Inicio e fim são iguais, não é possivel fazer a contagem";
    } else if($step == 0){
      echo "O campo passo tem que ser maior que 0";
      
    }else {
      if ($ini < $fim) {


        while ($ini <= $fim) {
          if ($ini == $fim) {
            echo "$ini. ";
          } else {
            echo "$ini, ";
          }
          $ini += $step;
        }
      } else {
        echo "<script type='text/javascript'>alert('A contagem vai ser regressiva!');</script>";
        while ($ini >= $fim) {
          if ($ini == $fim) {
            echo "$ini. ";
          } else {
            echo "$ini, ";
          }
          $ini -= $step;
        }
      }
    }
    ?>
    <br />
    <a href="javascript: history.go (-1)" class='botao'>Voltar</a>
  </div>
</body>

</html>