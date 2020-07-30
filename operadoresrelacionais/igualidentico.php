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
           $a = 3;
           $b = "3";
           $r = ($a == $b) ? "SIM" : "NÃO";
           $r1 = ($a === $b) ? "SIM" : "NÃO";

           echo " As variaveis  A e B são iguas? $r ";
           echo "</br> As variaveis  A e B são identicas? $r1 ";

    ?>
    </div>
</body>
</html>
