<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salarioMinimo = 1380;
        $salario = $_GET['salario'] ?? $salarioMinimo;
        $qtdeSalario = intdiv($salario, $salarioMinimo);
        $sobra = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>
            <?php
                echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") ." ganha <strong>$qtdeSalario salários mínimos + </strong>" . numfmt_format_currency($padrao, $sobra, "BRL");
            ?>
        </p>
    </section>
</body>
</html>