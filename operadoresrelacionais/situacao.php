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
            //colocar no final da url ?n1=5&n2=8
           $nota1 = $_GET["n1"];
           $nota2 = $_GET["n2"];
           $m = ($nota1 + $nota2)/2;
      
           echo "  a media entre $nota1 e $nota2 é $m </br>";
           
          // $sit = ($m<6) ? "Reprovado": "Aprovado";

           echo " O aluno foi ".(($m<6)? "Reprovado": "Aprovado");

    ?>
    </div>
</body>
</html>
