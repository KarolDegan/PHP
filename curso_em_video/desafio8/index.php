<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Desafio8</title>
</head>
<body>
    <?php
        $v = $_GET['n'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="n">
            <input type="submit" value="Calcular Raiz">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <?php

            $q = $v**(1/2);
            $c = $v**(1/3);

            echo "<p>Analisando o <strong>número $v,</strong> temos:";
            echo "<ul><li> A sua raiz quadrada é $q</li>";
            echo "<li> A sua raiz cúbica é $c</li></ul></p>"
        ?>
    </section>
</body>
</html>