<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
        /*
        $m= array(array(6,4),array(4,9),array(3,2));
        print_r($m);
        $x=5;
        $y=3;
        $c=($x>$y)?true:false;
        echo $c;

        $a = 10;
        $b = "10";
        if ($a == $b)
          print "caso 1";
        else
          print "caso 2";
      
        if ($a === $b) {
          print "caso 3";
        } else {
          print "caso 4";
        }


        $a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i<br/>";
}
     */
$x = 4;
$y = &$x;
$z = ++ $y;
echo "X=$x Y=$y Z=$z";

function f($v, $n) {
  if ($n <= 0) return 1;
  else
  return $v[$n-1] * f($v, $n-2) + 1;
}
$a = array(0,1,2,3);
print (f($a, 4));
    ?>
    </pre>
</div>
</body>
</html>
 