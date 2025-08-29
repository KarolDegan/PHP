<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa{

    

    function __construct( 
        string $nome,
        CPF $cpf,
        private float $salario,
        
        ) {
        
            parent::__construct($cpf,$nome);
    }

    public function getSalario(): float{
        return $this->salario;
    }

    abstract public function bonificacao(): float;
}