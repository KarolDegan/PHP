<?php


require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\{Titular,Conta};  

$endereco = new Endereco('Petropolis','bairo','rua','71B' );
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias',$endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEnd = new Endereco('Sao Paulo','bua','Lua','99p' );
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEnd));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
