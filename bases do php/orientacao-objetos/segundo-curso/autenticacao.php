<?php 

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;

require_once "autoload.php";

$f3 = new Diretor('Maria', new CPF('789.456.123-33'), 5000);

$aut = new Autenticador();
$aut->login($f3,'12');