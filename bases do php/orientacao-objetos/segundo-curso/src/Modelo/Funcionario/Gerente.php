<?php 

namespace Alura\Banco\Modelo\CPF;
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;

class Gerente extends Funcionario implements Autenticavel{

    function __construct(
        string $nome,
        CPF $cpf,
        float $salario,
    )
    {
        parent::__construct($nome,$cpf,$salario);
    }

    public function bonificacao(): float
    {
        return $this->getSalario();
    }

    public function podeAutenticar($senha): bool
    {
        if ($senha == '4321') return true;
        else return false;
    }
}