<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cotação 2</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            //Pegar dados do banco central por json
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];


            $dinheiro = $_GET["numero"] ?? 0;
            $money = $dinheiro/$cotacao;

            $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
                
            echo "Seus " . numfmt_format_currency($padrão, $dinheiro, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $money, "USD");

            echo "<p><strong>*Cotação fixa para $cotacao </strong> informada diretamente no código</p>"
        ?>

        <button href="javascript:history.go(-1)"> Voltar</button>
    </main>
</body>
</html>