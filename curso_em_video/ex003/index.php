<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 010;
        echo "O valor da variável é $num";
        echo "<br>";
        var_dump($num);

        echo "<br>";
        $valor = (int)'970'; //coerção
        var_dump($valor);
    ?>
</body>
</html>