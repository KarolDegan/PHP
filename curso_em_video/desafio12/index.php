<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Desafio12</title>
</head>
<body>
    <?php
        $v = $_GET['valor']
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="quantidade">Quantidade de segundos?</label>
            <input type="number" name="valor">
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Totalizando tudo</h2>
            <?php
                $semana = intdiv($v,604800);
                $vresto= $v - ($semana * 604800);
                $dia = intdiv($vresto,86400);
                $vresto= $vresto - ($dia * 86400);
                $hora = intdiv($vresto,3600);
                $vresto= $vresto - ($hora * 3600);
                $minuto= intdiv($vresto,60);
                $vresto= $vresto - ($minuto * 60);


                echo "<p>Analisando o valor que você digitou, <strong> $v segundos</strong> equivalem a um total de:</p>";
                echo "<p><ul><li>$semana semanas";
                echo "<li>$dia dias";
                echo "<li>$hora horas";
                echo "<li>$minuto minutos";
                echo "<li>$vresto segundos</li></ul</p>";
            ?>
        </section>
    </main>
</body>
</html>