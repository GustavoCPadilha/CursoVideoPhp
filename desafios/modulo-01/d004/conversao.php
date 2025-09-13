<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php
                // Cotação vinda da API do Banco Central
                $dataInicio = date("m-d-Y", strtotime("-7 days"));
                $dataFim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataFim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $real = $_REQUEST["dinheiro"] ?? 0;
                $dolar = $real / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br>";
                echo "*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>