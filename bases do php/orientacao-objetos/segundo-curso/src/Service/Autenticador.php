<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador{

    public function login(Autenticavel $aut, string $senha): void{

        if ($aut->podeAutenticar($senha)){
            echo "Usuário logado!";
        }
        else{
            echo "Senha incorreta";
        }
    }
}