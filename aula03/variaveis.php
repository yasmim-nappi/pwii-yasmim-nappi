<!DOCTYPE html>
<html>
    <style>
        .texto{
            color:pink;
            background-color: white;
            font-size: 70px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            }
    </style>
    <body>
    <p class="texto">
        <?php 
        $texto = "isso é um texto";
        $n1 = 2;
        $n2 =5;
        $valor = null;

        echo $texto;
        echo "<br>";
        echo gettype($texto), "<br>";
        echo gettype($n1), "<br>"; 
        echo gettype($n2), "<br>";
        echo gettype($valor),"<br>";
        ?>
    </p>
    </body>
</html>