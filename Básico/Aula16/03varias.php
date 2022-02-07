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
        $t=" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor";
        $r = wordwrap($t, 20, "<br/>\n",true/*true quebra no meio da palavra, false não*/);
        echo $r;
        echo "<br/>strlen ".strlen($t);
        $novo = trim($t); // funções lreim() para eliminar no inicio. rtrim() para eliminar no final
        echo "<br/>strlen de trim ".strlen($novo);
        $contaPalavras= str_word_count($t,0); // valor 0 conta as palavras, 1 cria um vetor com as palavras e, cada um dos index, 2 cria um array mostrando o indice no qual cada uma das palavras começa;
        echo "<br/>str_word_count ".$contaPalavras;
        $t2 = "isso é a segunda string";
        echo "<br/>";
        $vetor = explode(" ",$t2); // quase a mesma coisa que o str_word_count porém você pode selecionar qual vai ser o caractere de separação, no caso o espaço
        print_r($vetor);
        echo "<br/>";
        $nome = "thayrone";
        $vetorNome = str_split($nome); // cada letra em uma posição do array
        print_r($vetorNome);
        echo "<br/>";
        $implodido = implode("#",$vetor); //junta os elementos do vetor em uma unica string separando eles pelo simbolo selecionado
        echo $implodido . "<br/>"; 
        // join funciona igual ao implode
        echo "<br/>";
        $letra= chr(67); // traduz o codigo para o caractere ord() faz o oposto
        echo"A letra no codigo 67 é $letra <br/>";



    ?>
</div>
</body>
</html>
 