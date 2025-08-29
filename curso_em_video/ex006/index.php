<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $v1 = $_GET['n1'] ?? 0;
        $v2 = $_GET['n2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> <!-- PHP_SELF é onde está o local deste arquivo dentro da variável $_SERVER -->
            <label for="valor1">Valor1</label>
            <input type="number" name="n1" id="idn1" value="<?= $v1 ?>"> <!-- É um echo -->
            <label for="valor2">Valor2</label>
            <input type="number" name="n2" id="idn2" value="<?= $v2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php 
            $s = $v1 + $v2;
            echo "<p>A soma ente os valores é igual a <strong> $s </strong></p>"
        ?>
    </section>
</body>
</html>