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
           $valor = $_GET["v"];
           $rq = sqrt($valor);
          
          echo " A raiz de $valor é ".number_format($rq,2);
          
    ?>
     <a href="index.html"> </br> Voltar</a>

    </div>
</body>
</html>
