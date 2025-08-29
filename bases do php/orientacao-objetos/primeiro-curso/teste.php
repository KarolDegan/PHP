<?php 

require_once __DIR__ . "/src/Calculadora.php";
require_once __DIR__ . "/src/Titulo.php";
require_once __DIR__ . "/src/Filme.php";
require_once __DIR__ . "/src/Serie.php";
require_once __DIR__ . "/src/Genero.php";

$filme = new Filme('Avangers',2012, Genero::SuperHeroi,110);
$serie = new Serie('Stranger Things', 2016, Genero::Misterio,4,8,50);

$calc = new Calculadora();
$calc->inclui($filme);
$calc->inclui($serie);
$duracao = $calc->duracao();

echo $duracao;