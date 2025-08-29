<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControlarBoni{

    private $totalBoni =0;

    public function addBoni(Funcionario $funcionario){
        $this->totalBoni += $funcionario->bonificacao();
    }

    public function getTotalBoni():float{
        return $this->totalBoni;
    }

    
}