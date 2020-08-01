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
           $nome = isset ($_GET["nome"])? $_GET["nome"] : "[Não informado]" ;//uso de isset [fui configurado]com operador ternario
           $ano = isset ($_GET["ano"])? $_GET["ano"] : 0 ;
           $sexo = isset ($_GET["sexo"])? $_GET["sexo"] : "[sem sexo]" ;
           $idade = date("Y") - $ano; //date. Y mostra o ano todo e y mosttra de forma reduzida

          echo " $nome é $sexo e tem $idade anos  ";
          
    ?>
     <a href="index.html"> </br> Voltar</a>

    </div>
</body>
</html>
