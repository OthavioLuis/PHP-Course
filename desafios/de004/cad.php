<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $inicio = date("m-d-Y");
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            
            $cotação = $dados["value"][0]["cotacaoCompra"];
            $valor = $_GET["valor"] ?? 0;

            $dolar = $valor / $cotação;

            //$conversor = number_format($conversor, 2, ',', '.');
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") ." equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>"
        ?>
        <a href="javascript:history.go(-1)">
            <input type="button" value="Voltar">
        </a>
    </main>
</body>
</html>