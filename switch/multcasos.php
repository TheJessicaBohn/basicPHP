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
 
           $d = isset ($_GET["ds"])? $_GET["ds"] : 0 ;
        
           switch ($d) {
               case '2':
               case '3':
               case '4':
               case '5':
               case '6':
                    echo "Levanta e vai estudar :)</br> ";
                   break;
                case '7': 
                case '1':
                    echo " descanse pequeno gafanhoto ;) </br>";
                   break;
                default:
                     echo " O dia da semana invalido </br>";
                   break;
           }
    ?>
     <a href="javascript:history.go(-1)" class= "botao" > Voltar</a>

    </div>
</body>
</html>
