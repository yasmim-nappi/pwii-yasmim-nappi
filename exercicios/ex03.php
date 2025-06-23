<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3º Exercício</title>
</head>
<body>
    <div>
        <h1>Calculador de Área</h1>
            <h2>Trapézio</h2>
                <form method ="GET">
                    Insira a base maior:
                        <input type="number" id="basemaior" name="basemaior">
                    <br>
                    Insira a base menor:
                        <input type="number" id="basemenor" name="basemenor">
                    <br>
                    Insira a altura:
                        <input type="number" id="altura" name="altura">
                    <br>
                    <p></p>
                        <input type="submit" value="Calcular">
                        <input type="reset" value="Limpar">
    </div>
</body>

<?php
$basemaior = 0.0;
$basemenor = 0.0;
$altura = 0.0;

$basemaior = $_GET['basemaior'];
$basemenor = $_GET['basemenor'];
$altura = $_GET['altura'];

$area = ($basemaior + $basemenor) * $altura/2;
echo("A área é de " .$area " cm.");
?>
</html>