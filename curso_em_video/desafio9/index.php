<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Desafio9</title>
</head>
<body>
    <?php
        $n1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['peso1'] ?? 1;

        $n2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> 
            <label for="valor1">1° Valor</label>
            <input type="number" name="v1" id="idn1" value="<?= $n1 ?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1"  value="<?= $p1 ?>">

            <label for="valor2">2° Valor</label>
            <input type="number" name="v2" id="idn2" value="<?= $n2 ?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2"  value="<?= $p2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Médias</h2>
        <?php 
            
            $pon = (($n1*$p1) + ($n2*$p2))/($p1+$p2);

            echo "<p>Analisando os valores $n1 e $n2:";
            echo "<ul><li>A média aritmética simples entre os valores é igual a ". ($n1+$n2)/2 . "</li>";
            echo "<li>A média aritmetica ponderada com pesos $p1 e $p2 é igual a ". number_format($pon,3,".",",") . "</li></ul></p>";
        ?>
    </section>
</body>
</html>