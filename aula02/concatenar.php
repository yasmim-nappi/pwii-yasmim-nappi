<!DOCTYPE html>
<html>
    <style>
        .cor{
            color:pink;
            background-color:white;
            font-size:70px;
        }

    </style>
    <body>
        <p class="cor">
            <?php
                ECHO "Hello World!<br>";
                echo "Hello World!<br>";
                EcHo "Hello World!<br>";

                $nome = "Yasmimzão";
                $sobrenome = "Silly";
                $numero = 69;

                echo $nome . "goat";
                echo "${nome} <h1> ${sobrenome} </h1>";
                echo $numero . "<p> " . $nome .
                " " . $sobrenome . "</p>";
            ?>
        </p>
    </body>
</html>