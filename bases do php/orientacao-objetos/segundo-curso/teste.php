<?php 

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario;

require_once __DIR__ . '/autoload.php';


$funcionario = new Funcionario('Karol', new CPF('784.555.965-44'),'Desenvolvedora');


$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias', 
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    )
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->recuperaSaldo();

