<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel =  "stylesheet" href="_css/estilo.css"/>
    <title> </title>
 
</head>
<body>
    <div>
    <?php
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           //colocar no final da url http://127.0.0.1/operadores/operadores.php?a=5&b=8
           $media = ($n1 + $n2) / 2 ;
          echo " <h3> Valores recebidos $n1 e $n2 </h3>";
          echo "</br>A soma vale ".($n1 + $n2);
          echo "</br> A subtração vale ".($n1 - $n2);
          echo "</br> A multiplicação vale ".($n1 * $n2);
          echo "</br> A divisão vale ".($n1 / $n2);
          echo "</br> A modulo vale ".($n1 % $n2);
          echo "</br> A media vale $media";
          

    ?>
    </div>
</body>
</html>
