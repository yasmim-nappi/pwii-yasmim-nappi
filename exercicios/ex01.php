<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1º Exercício</title>
</head>
<body>
    <div>

    <h1>Calculadora de Consumo </h1>

        <form method="GET">
            Insira a distância percorrida em Kilômetros:
                <input type= "number" id="km" name="km">
            <br>
            Insira a quantidade de combustível em Litros:
            <input type="number" id="combustivel" name="combustivel">
            <br>

            <p></p>
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
        </form>
        </div>
</body>

<?php
$km= 0.0;
$combustivel = 0.0;

$km = $_GET['km'];
$combustivel = $_GET[combustivel];

echo ("O consumo médio de combustível é de: " . $km/$combustivel . " litros.")
?>

</html>