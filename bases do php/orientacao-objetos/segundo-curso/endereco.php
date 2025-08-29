<?php 

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\CPF;

require_once "autoload.php";

$e1 = new Endereco('Sao Paulo', 'Bom Retiro', 'Av. Tiradentes', '248');
$e2 = new Endereco('Sao Paulo', 'Bela Vista', 'Tortos', '2475');

//echo $e1 . PHP_EOL;
//echo $e2 . PHP_EOL;

echo $e1->rua . PHP_EOL;

// $e1->rua = 'Nova Rua';

$p1 = new Gerente('Gabriel',new CPF('789.654.123-00'),1000);

var_dump($p1);


