<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel{

    public function bonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function autenticar($senha): bool{
        if ($senha == '1234'){
            return true;
        }
        else{
            return false;
        }
    }

    public function podeAutenticar($senha): bool
    {
        return $senha === '1234';
    }
}