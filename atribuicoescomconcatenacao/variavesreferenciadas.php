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
     //colocar no final da url ?aa=2014
           $a = 3;
           $b = &$a; // passagem por referencia
           $b += 5;
          
           echo " </br> A variavél a vale $a e a variavél b vale $b ";
    ?>
    </div>
</body>
</html>
