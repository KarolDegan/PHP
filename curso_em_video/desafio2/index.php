<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Numeros Aleatórios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleártorio</h1>
        <?php
            $min = 0;
            $max = 100;  
            $n_ale = rand($min,$max);
            //mt_rand() == rand()
            //random_int()gera números aleatórios criptograficamente seguros / lenta
            echo "<p>Gerando números aleatórios entre $min e $max <br>O valor gerado foi <strong>$n_ale</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>