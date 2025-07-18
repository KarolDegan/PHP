<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
            $n = $_GET["numero"] ?? 0;

            echo "O número escolhido foi <strong>$n</strong>";
            echo "<br>O seu <em>antecessor</em> é " . $n-1;
            echo "<br>O seu <em>sucessor</em> é " . $n+1;
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </main>
</body>
</html>