<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {

        $this->endereco = $endereco;

        parent:: __construct($cpf,$nome);
    }

    

    public function getEndereco(): Endereco{
        return $this->endereco;
    }

    public function podeAutenticar($senha): bool
    {
        if ($senha == 'abcd') return true;
        else return false;
    }
}
