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
 
           $n = isset ($_GET["num"])? $_GET["num"] : 0 ;
           $o = isset ($_GET["oper"])? $_GET["oper"] : 1 ; //se não for passada nenhuma operação será passado a default

           switch ($o) {
               case '1':
                    $r = $n * 2;
                   break;
                case '2':
                    $r = $n * $n * $n ; // na aula ele utiliza esse exemplo $n ^ 3 porém não funciona corretamente
                   break;
                 case '3':
                    $r = sqrt ($n); //  $n ^ (1/2) ou 0,5
                   break;
           }
           echo " O resultado da operação solicitada é <span class='foco'> $r </span> </br>";
 
    ?>
     <a href="operacoesindex.html" class= "botao" > Voltar</a>

    </div>
</body>
</html>
