<?php 

namespace Alura\Banco\Modelo\Conta;

class ContaPupanca extends Conta{
    
    protected function tarifa(): float{
        return 0.03;
    }
}