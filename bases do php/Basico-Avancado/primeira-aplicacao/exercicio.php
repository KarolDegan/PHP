<?php 

/*
Ler somente uma linha usando a função fgets.
Ler um número determinado de bytes do arquivo através de fread.
Escrever em um arquivo usando fwrite.
Navegar no arquivo para uma posição específica com fseek.

Todas essas funções possuem como parâmetro uma variável do tipo resource, 
que nesse caso é uma espécie de ponteiro para o arquivo. Para termos esse ponteiro, 
utilizamos a função fopen que abre um arquivo para leitura, escrita ou ambos, dependendo dos 
modos de abertura que informarmos por parâmetro.
*/

//pegar apenas primeira linha
$caminho = fopen(__DIR__ . "/teste.txt","r");
$conteudo = fgets($caminho);

echo $conteudo;

fclose($caminho);

//escrever no final do arquivo
$caminho = fopen(__DIR__ . "/teste.txt", "a");
$conteudo = "\nPHP é incrível!";

if(fwrite($caminho,$conteudo) === FALSE ) echo "ERRO ao escrever no arquivo!";
else echo "Arquivo alterado com sucesso!";

fclose($caminho);
