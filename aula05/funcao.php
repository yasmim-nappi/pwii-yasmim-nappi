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
        <p class=texto>
            <?php
            function myMessage() {
                echo "Hello world! <br>";
              }
              myMessage();
              myMessage();

              function Soma($n1, $n2) {
                echo $n1 + $n2, "<br>";
              }
            Soma(3, 4);
            Soma(12, 4);
            ?>
        </p>
    </body>
</html>