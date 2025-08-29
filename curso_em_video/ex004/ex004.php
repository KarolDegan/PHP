<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento<h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "semnome";
            $sn = $_GET["sobrenome"] ?? "desconhecido";

            echo "<p> Prazer $n $sn !<p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>