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
           $nota1 = isset ($_GET["n1"])? $_GET["n1"] : 0 ;
           $nota2 = isset ($_GET["n2"])? $_GET["n2"] : 0 ;
           $media = ($nota1 + $nota2) /2;

           echo " A média entre $nota1 e $nota2 é  $media </br>";
            // poderia ser <= 5, sim porém não queremos numeros negativos
           if ($media >= 0 && $media < 5) {
             $situacao = "Reprovado";
           }
          elseif ($media >= 5 && $media < 7  ){
            $situacao = "Recuperação";
            }
             //  <=10 é usado pois quero o intervalo fechado
         elseif ($media >= 7 && $media <=10  ){
                $situacao = "Aprovado";
            }else {
                $situacao = "valores incorretos";
            }
          
         echo " A situação do aluno é $situacao "
    ?>
        <a href="surpresaindex.html"> </br> Voltar</a>

    </div>
</body>
</html>
