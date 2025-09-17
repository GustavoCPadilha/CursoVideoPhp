<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <?php
        $nascimento = $_GET['nascimento'] ?? 2000;
        $anoAtual = date('Y');
        $anoIdade = $_GET['anoAtual'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" min="1900" max="<?=$anoAtual-1?>" value="<?=$nascimento?>">
            <label for="anoIdade">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="anoIdade" id="anoIdade" min="1900" value="<?=$anoIdade?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $resultado = $anoIdade - $nascimento;
            echo "Quem nasceu em $nascimento vai ter <strong>$resultado anos</strong> em $anoAtual!";
        ?>
    </section>
</body>
</html>