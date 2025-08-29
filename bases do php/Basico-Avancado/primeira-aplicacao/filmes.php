<?php 

require_once __DIR__ . "/src/funcoes.php";

$variavel = $argv[1] ?? 2008; 

// variável que peg tudo o que se passa junto com a execiução do program por linha de comando

echo $variavel . PHP_EOL;

$nomeFilme = "Thor";

$genero = match($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Se beber não case" => "comédia",
    "Thor" => "fantasia",
    default => "genero desconhecido",
};

echo "o gênero do filme é: " . $genero . PHP_EOL;

//se não encontrar nada e não tiver default ocorre erro 

echo "O Número de parametros que passamos pela linha de comando é argc, que foi igual a : $argc" . PHP_EOL;

//entrada por terminal

$numero = (float) fgets(STDIN); //pega a entrada do terminal

//no php as váriáveis também são passadas por valor para passar por referencia &
// função sort para ordenar arrays

