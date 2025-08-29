<!DOCTYPE html>
<html lang="pt-pr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Desafio7</title>
</head>
<body>
    <?php
        $salario= $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="sal" step="0.01" value="<?= $salario ?>">
            <p>Considere o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $t = 1380;
            $n = intdiv($salario,$t);
            $resto = $salario - ($n*$t);
            echo"<p>Quem recebe um salário de R\$". number_format($salario,2,".",",")." ganha $n salários mínimos + R\$".number_format($resto,2,".",",")."</p>";
        ?>
    </section>
</body>
</html>