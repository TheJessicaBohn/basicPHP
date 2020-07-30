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
            //colocar no final da url ?an=1996 o s pode ser substiuido por outra pra multiplicar
           $ano = $_GET["an"];
           $idade = 2020 - $ano;
           $tipo =($idade >=18 && $idade<65)? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
           //lembrando que existe o || ou ou o xor que é o ou exclusivo

           echo " Quem nasceu em $ano em a idade de  $idade anos </br> ";
           echo " E dessa fora seu voto é  $tipo ";

    ?>
    </div>
</body>
</html>
