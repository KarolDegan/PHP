<?php 

require_once __DIR__ . "/src/Genero.php";
require_once __DIR__ . "/src/Titulo.php";
require_once __DIR__ . "/src/Filme.php";
require_once __DIR__ . "/src/Serie.php";
require_once __DIR__ . "/src/funcoes.php";
require_once __DIR__ . "/src/Calculadora.php";

echo "Bem vindo(a) ao SreenMatch" .PHP_EOL;

$filme = new Filme('Thor',2021,Genero::Acao,100);
//$filme->nome = 'Thor';
//$filme->ano = '2016';
$filme->setAno(2016);
//$filme->genero = 'super-heroi';
//$filme->setGenero(Genero::SuperHeroi);

$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);
$filme->avalia(10);

var_dump($filme);
echo $filme->media();

$serie = new Serie('Stranger Things', 2016, Genero::Misterio,4,8,50);

$serie->avalia(10);
$serie->avalia(5);
$serie->avalia(5);
$serie->avalia(10);

var_dump($serie);