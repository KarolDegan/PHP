<?php 

function exibeMensagemLancamento(int $ano) : void {
    if($ano>=2022) echo "Esse filme é um lançamento\n";
    else if($ano>2020) echo "Esse filme é novo\n";
    else echo "Esse filme não é um lançamento\n";
}

function incluidoNoPlano ( bool $plano, int $ano) : bool {
    return $plano || $ano < 2020;
}

function criaFilme(string $nome, int $ano, float $nota, string $genero) : array {
    return [
        'nome' => $nome,
        'ano' => $ano,
        'nota' => $nota,
        'genero' => $genero
    ];
}