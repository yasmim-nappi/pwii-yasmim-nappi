<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4º Exercício</title>
</head>
<body>
    <div>
        <h1>Calculadora de Parcelas</h1>
            <form method="GET">
                Insira o valor:
                    <input type="number" id="valor" name="valor">
                <br>
                <p></p>
                    <input type="submit" value="Calcular">
                    <input type="reset" value="Limpar">
            </form>    
    </div>
</body>
<?php
$valor = 0.0;

$valor = $_GET['valor'];

$porcentagem = 0.16 * $valor + $valor;
$parcela = $porcentagem/10;

echo ("Cada parcela será de: R$". number_format($parcela, 2, ',', '.')) . "<br>";
echo("O valor total será de: R$" .number_format($porcentagem, 2, ',','.'));
?>
</html>