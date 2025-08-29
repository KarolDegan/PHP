<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Karoldegan\BuscadorCursos\Buscador;

$client = new Client(['base_uri'=>'https://www.alura.com.br']);
$crawler = new Crawler(); 

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscarCurso('/cursos-online-programacao/php');

$cont = 1;
foreach ($cursos as $curso){
    echo $cont . $curso . PHP_EOL;
    $cont++;
}