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
            //colocar no final da url ?a=5&b=8&op=s o s pode ser substiuido por outra pra multiplicar
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           $tipo = $_GET["op"];
           
           echo " <h3> Valores recebidos $n1 e $n2 </h3>";
           $r = ($tipo == "s") ?$n1 + $n2 : $n1 * $n2;
           echo " </br> O resulado é $r ";

    ?>
    </div>
</body>
</html>
