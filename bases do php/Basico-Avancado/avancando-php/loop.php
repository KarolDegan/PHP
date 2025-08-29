<?php 

$iList = [21, 22, 85, 74, 77,48];

//for ($i=0; $i < count($iList); $i++) echo $iList[$i] . PHP_EOL;

$lista1 = ['titular' => 'Vitor' , 'idade' => 42];
$lista2 = ['titular' => 'Bea' , 'idade' => 4];
$lista3 = ['titular' => 'Jacqueline' , 'idade' => 24];

$junto = [$lista1,$lista2,$lista3];

for ($i=0; $i<count($junto); $i++) echo $junto[$i]['titular'] . PHP_EOL;

foreach ($junto as $c) echo $c['titular'] . PHP_EOL;

$junto = [1234 => $lista1, 391374 => $lista2, 9372409 => $lista3];

foreach ($junto as $c => $d) echo "\n" . $c . $d['titular'];
// $c chave e o $d o vetor

// adicionar itens no array

$iList [6] = 77;
echo "proxima posição: " . $iList[6] . PHP_EOL;

//ou
$iList[] = 82;
echo "sem chave: " . $iList[6] . PHP_EOL;

for ($i=0;$i<count($iList); $i++) echo $iList[$i] .PHP_EOL;