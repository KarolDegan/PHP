<?php 

use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControlarBoni;

require_once "autoload.php";

$f1 = new Funcionario('Vinicius', new CPF('123.456.789-10'), 'Apicultor', 1000);

$f2 = new Funcionario('Antonio', new CPF('789.456.123-33'), 'Barista', 3000);

$f3 = new Diretor('Maria', new CPF('789.456.123-33'), 'Diretor', 5000);

$controlador = new ControlarBoni();
$controlador->addBoni($f1);
$controlador->addBoni($f2);
$controlador->addBoni($f3);
echo $controlador->getTotalBoni();

