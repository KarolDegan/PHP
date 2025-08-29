<?php 

$notas = [];

//colocando as notas passadas por linha de comando para dentro do array
for($cont=1;$cont<$argc; $cont++){
    $notas[] = (float) $argv[$cont];
}

for ($i=0 ; $i<count($notas); $i++){
    echo $notas[$i];
}

//somando as notas
$soma = 0;

foreach ($notas as $n){
    $soma += $n;
}

$maisfacilsoma = array_sum($notas);
