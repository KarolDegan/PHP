<?php 

$filmes = [
    "nome" => "Thor : Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

//passas um array associativo para json
$filmeJson = json_encode($filmes);

//passar um json para array associativo
var_dump(json_decode('{"nome":"Thor : Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true));

//coloca conteudo no arquivo
file_put_contents(__DIR__ . '/filme.json', $filmeJson);

// ler arquivos
$caminho = __DIR__ . '/filme.json' ;
$conteudoJson = file_get_contents($caminho);
$vetorAss = json_decode($conteudoJson,true);

var_dump($vetorAss);
