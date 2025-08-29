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

        $d = $_GET['div'] ?? 0;
        $s = $_GET['sor'] ?? 1;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="div" id="iddiv" min="0" value="<?php $d ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="sor" id="idsor" min="1" value="<?php $s ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php

            $r = $d%$s;
            $q = intdiv($d,$s);
            echo "<ul>";
            echo "<li>Dividendo: $d</li>";
            echo "<li>Divisor: $s</li>";
            echo "<li>Resto: $r</li>";
            echo "<li>Quociente$q</li>";
            echo "</ul>";
        ?> 
    </section>
</body>
</html>