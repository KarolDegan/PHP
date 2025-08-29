<?php

namespace Alura\Solid\Service;


use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistido(Assistivel $conteudo)
    {
       $conteudo->assistir();
    }
}
