<?php 

class Serie extends Titulo{
    
    public function __construct(
        string $nome,
        int $ano,
        Genero $genero,
        public int $temporadas,
        public int $epPorTeporada,
        public int $minutosPorEpisodio,
        )
    {
        parent::__construct($nome,$ano,$genero);
        
    }

    public function duracaoEmMinutos(): int {
        return $this->temporadas*($this->epPorTeporada* $this->minutosPorEpisodio);
    }

}