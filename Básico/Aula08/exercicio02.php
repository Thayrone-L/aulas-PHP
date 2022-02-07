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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Não informado." ;
        $ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Não informado." ;
        $idade = date("Y") - $ano;



        echo "$nome tem $idade anos e é do sexo $sexo";
    ?>
    <a href="exercicio02.html"><br/>voltar</a>
</div>
</body>
</html>
 