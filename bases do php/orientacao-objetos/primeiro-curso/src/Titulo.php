<?php 

class Titulo{
    private array $notas = [];
    
    public function __construct(
        public readonly string $nome, 
        private int $ano, 
        private Genero $genero,
        )
    {
        
        $this->notas = [];
    }

    public function avalia(float $nota) :void{
        $this->notas[] = $nota;
    }

    public function media() : float{
        return array_sum($this->notas)/count($this->notas);
    }

    //GETTER E SETTER

    public function getAno(): int{
        return $this->ano;
    }

    public function setAno(int $ano): void{
        $this->ano = $ano;
    }

    public function getGenero(): Genero{
        return $this->genero;
    }

    public function getNome(): string{
        return $this->nome;
    }

    //
    public function duracaoEmMinutos(): int{
        return 0;
    }
}