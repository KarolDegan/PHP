<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario{

    

    public function bonificacao(): float
    {
        return 500.0;
    }

}