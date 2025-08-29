<?php 

class Filme extends Titulo{
    private array $notas = [];
    
    public function __construct(
        string $nome,
        int $ano,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
        ){
            parent::__construct($nome,$ano,$genero);
    }

    public function duracaoEmMinutos(): int{
        return $this->duracaoEmMinutos;
    }

}

//objetos são ponteiros eles apontam para um local da memória então se eu faço obj1 = obj2 ela vai apontar para o mesmo objetos
