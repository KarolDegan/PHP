<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador</title>
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
            $inte = (int) $n;
            $fra = $n - $inte;

            echo "<p> Analisando o número <strong>" . number_format($n,3,'.',',') ."</strong> informado pelo usuário:";
            echo "<ul> <li> A parte do número é <strong>" .number_format($inte,3,'.',',') . "</strong> <li>";
            echo "<li> A parte fracionária do número é <strong>" . number_format($fra,3,'.',',')." </strong> </li></ul></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>