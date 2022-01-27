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
        function soma (){
            $p = func_get_args();
            $tot = func_num_args();
            $s=0;
            for($i=0;$i<$tot;$i++){
                $s=$s+$p[$i];
            }
            $r=$s/$tot;
            return $r;
        }
        
        $res = soma(3,5,4,1,2,3,6,8,1,12,3,5,85,8);
        echo"A soma é $res";
    ?>
</div>
</body>
</html>
 