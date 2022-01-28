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
        $nome= "Thayrone";
        $nome2 = strtolower($nome); // strtoupper($nome); maiusculas. ucfirst() primeira letra da primeira palavra maiuscula. ucwords() todas as palavras começam com maiuscula
        echo $nome2;
        $nomeReverso = strrev($nome); // inverte a string
        echo"<br/> $nomeReverso";
        $frase= "isso é uma string para em PHP encontrar algo na string";
        $pos = strpos($frase,"PHP"); // busca o parâmetro na string exatamente do jeito que foi digitado, stripo() encontra independente de maiusculas ou minusculas
        echo"<br/>A string foi encontrada na posição $pos";
        $cont = substr_count($frase, "string"); //  conta quantas vezes o parametro aparece na string
        echo "<br/>A palavra string foi encontrada $cont vezes";
        $sub = substr($frase,0,5); // pega um pedaço da string de acordo com o parametro numeros negativos pegam o final da string
        echo "<br/> $sub"; 
        $novo = str_pad($nome,60,"*",STR_PAD_RIGHT); // left e center também
        echo"<br/>Esse é o nome $novo  isso é o que vem depois";
        $repeat=str_repeat("teste",5); // repete a trin
        print("<br/>$repeat");
        $novaFrase=str_replace("string","frase",$frase); // troca uma substring por outra str_ireplace() ignora maiusculas e minusculas
        echo"<br/> $novaFrase";
    ?>
</div>
</body>
</html>
 