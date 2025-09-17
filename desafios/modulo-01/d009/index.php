<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <?php 
        $num1 = $_GET['num1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $num2 = $_GET['num2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">1° Valor</label>
            <input type="number" name="num1" id="num1" value="<?=$num1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="num2">2° Valor</label>
            <input type="number" name="num2" id="num2" value="<?=$num2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $mediaAritmetica = ($num1 + $num2) / 2;
            $mediaPonderada = (($num1 * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2);
            echo "<p>Analisando os valores $num1 e $num2</p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediaAritmetica.</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaPonderada.</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>