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
 
           $a = isset ($_GET["ano"])? $_GET["ano"] : 0 ;
           $i = date("Y") - $a; 

           echo " Voce nasceu em $a e tem $i anos </br>";
           if ($i>=18) {
             $v = "já pode votar";
             $d = "já pode dirigir";
           }
          else {
            $v = "não pode votar";
            $d = "não pode dirigir";
          }
        echo "Com essa idade voce $v e também $d  ";
    ?>
     <a href="dirigirvotarindex.html"> </br> Voltar</a>

    </div>
</body>
</html>
