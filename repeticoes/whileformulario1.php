<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel =  "stylesheet" href="_css/estilo.css"/>
    <title> </title>
 
</head>
<body>
    <div>
        <form method="get" action="whileformulario2.php">
        <?php
        $c = 1;
        while ($c <= 5) {
            
         echo "Valor $c: <input type='number' name='v   $c' min='0' max='100' value ='0'/> </br>";
         //aspas simples dentro do echo
         $c++ ;
        }
        ?>
        </br> <input type="submit" class="botao" value="Enviar">
        </form>
    </div>
</body>
</html>
