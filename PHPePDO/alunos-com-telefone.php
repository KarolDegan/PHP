<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$conect = ConnectionCreator::createConnection();
$repositorio = new PdoStudentRepository($conect);

$lista = $repositorio->studentWithPhones();

var_dump($lista);
