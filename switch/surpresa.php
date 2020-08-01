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
            //código feito por mim
           $e = isset ($_GET["estado"])? $_GET["estado"] : 0 ;
        
           switch ($e) {
               case '1':
               case '3':
               case '4':
               case '14':
               case '22':
               case '23':
               case '27':
                echo "Voce mora na região <span class='foco'>norte</span></br> ";
               break;           
               case '2':
               case '5':
               case '6':
               case '10':
               case '15':
               case '17':
               case '18':
               case '26': 
                echo "Voce mora na região<span class='foco'> nordeste</span></br> ";
               break;
               case '7':
               case '9':
               case '11':
               case '12':
               case '21':
                echo "Voce mora na região <span class='foco'>centro-oeste</span></br> ";
               break;
               case '8':
               case '13':
               case '19':
               case '25':
                echo "Voce mora na região <span class='foco'>sudeste</span></br> ";
               break;
               case '16':
               case '20':
               case '24':
                echo "Voce mora na região <span class='foco'>sul</span> </br>";
               break;

           }
    ?>
     <a href="javascript:history.go(-1)" class= "botao" > Voltar</a>

    </div>
</body>
</html>
