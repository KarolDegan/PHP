<?php 

$idade = 17;
$acomp = True;

echo "Você só pode entrar se tiver 18 anos ou 16 acompanhado". PHP_EOL;

echo "Você tem $idade anos" . PHP_EOL;

if ($idade>=18){
    echo "Você pode entrar";
} 
else if($acomp && $idade>=16){
    echo "Você pode entrar";
} 
else {
    echo "Você não pode entrar";
}