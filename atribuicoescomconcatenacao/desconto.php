<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel =  "stylesheet" href="_css/estilo.css"/>
    <title> </title>
    <style>
    h3{
            font: 15pt Arial; 
            color: #F781D8;
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <div>
    <?php
     //colocar no final da url ?p=10
           $preco = $_GET["p"];
           echo " <h3> Valor recebido $preco </h3>";
           echo "</br> O preço do  produto é: R$".number_format($preco, 2, ",",".");
           $preco += ($preco *10/100);
           //ou $preco = $preco + ($preco *10/100);
           echo "</br> E o novo preço com 10% de aumento é: R$".number_format($preco, 2, ",",".");
           //lembrando que dessa forma não é uma boa pratica, pois o codigo pega o preço aumentado e da o desconto
           //em cima deste, porém a ideia aqui é apenas deixar mais código
           $preco -= ($preco *10/100);
           echo "</br> E o novo preço com 10% de desconto é: R$".number_format($preco, 2, ",",".");

    ?>
    </div>
</body>
</html>
