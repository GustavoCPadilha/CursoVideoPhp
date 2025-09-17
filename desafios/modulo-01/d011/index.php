<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <?php
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $reajuste = $preco + ($preco * $percentual / 100);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" 
            value="<?=$percentual?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            echo "O produto que custava " . numfmt_format_currency($padrao, $preco, 'BRL') . ", com <strong>$percentual% de aumento</strong> vai passar a custar " . numfmt_format_currency($padrao, $reajuste, 'BRL') . " a partir de agora.";
        ?>
    </section>
    <script>
        // Declarações automáticas
        mudaValor();

        function mudaValor() {
            p.innerText = percentual.value;
        }
    </script>
</body>
</html>