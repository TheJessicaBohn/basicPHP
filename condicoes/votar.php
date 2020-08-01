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
           if ($i < 16) {
             $tipoVoto = "não vota";
           }
          elseif (($i >= 16 && $i < 18 )||( $i >= 65)){
              $tipoVoto = "voto facultativo";
            }
            else {
              $tipoVoto = "voto obrigatório";
            }
 
          
        echo "Para essa idade, $tipoVoto ";
    ?>
     <a href="votarindex.html"> </br> Voltar</a>

    </div>
</body>
</html>
