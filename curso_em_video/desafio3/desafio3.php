<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v1.0</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $dinheiro = $_GET["numero"] ?? 0;
            $money = $dinheiro/5.22;
            //echo "<p>Seus R\$" . number_format($dinheiro,2,",",".") . "equivaem a <strong> US\$" . number_format($money,2,",",".") . "</strong></p>";
            
            //Formatação de moedas com internaionalização!

            $padrão = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            
            echo "Seus " . numfmt_format_currency($padrão, $dinheiro, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $money, "USD");

            echo "<p><strong>*Cotação fixa para 5,22</strong> informada diretamente no código</p>"
        ?>
        <button href="javascript:history.go(-1)">Voltar</button>   
    </section>
</body>
</html>