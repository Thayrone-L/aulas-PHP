<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <pre>

    <?php
    $n = array(1, 7, 8, 9, 5, 4);
    $n[] = 2;
    print_r($n);
    $c = range(5, 20, 2);
    echo "<br/>Range<br/>";
    echo "<table border=1><tr>";
    foreach ($c as $v) {
        echo "<td>$v ";
    }
    echo "</table>";
    $v = array(1 => 5, 3 => 3);
    echo "<br/>";
    print_r($v);
    unset($n[2]);
    echo "<br/>";
    print_r($n);
    $variado = array(
        'nome' => "Thayrone",
        'idade' => 27,
        'peso' => 82.7
    );
    echo "<br/>";
    print_r($variado);

    foreach($variado as $k => $v){
        echo"<br/> O valor de $k é $v";
    }


    ?>
    </pre>
    </div>
</body>

</html>