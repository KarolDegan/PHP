<?php 

function criaFilme(string $nome, int $ano, float $nota, string $genero) : Filme{
    $f = new Filme($nome,2021,Genero::Acao);
    //$f->nome = $nome;
    $f->$ano = $ano;
    $f->$nota = $nota;
    $f->$genero = $genero;

    return $f;
}