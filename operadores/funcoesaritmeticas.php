<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel =  "stylesheet" href="_css/estilo.css"/>
    <title> </title>
    <style>
    h3{
            font: 15pt Arial; 
            color: #F781D8;
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <div>
    <?php
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           //colocar no final da url http://127.0.0.1/operadores/operadores.php?y=-3&x=4
          echo " <h3> Valores recebidos $v1 e $v2 </h3>";
          echo "O valor absoluto de $v2 é: ".abs($v2);
          echo "</br> O valor de $v1 <sup>$v2</sup>   é: ".pow($v1, $v2);
          echo "</br> A raiz de vale $v1 é: ".sqrt($v1);
          echo "</br> O valor de  $v2 arredondado é: ".round($v2);  
          echo "</br> O valor de  $v2 arredondado é: ".ceil($v2);
          echo "</br> O valor de  $v2 arredondado é: ".floor($v2);
          echo "</br> a parte  inteira de  $v2 é: ".intval($v2);
          echo "</br> O valor de  $v1 em moeda é: R$ ".number_format($v1, 2, ",",".");
          



          

    ?>
    </div>
</body>
</html>
