<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php
                $real = $_REQUEST["dinheiro"] ?? 0;
                $cotacao = 5.22;
                $dolar = $real / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br>";
                echo "<strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>