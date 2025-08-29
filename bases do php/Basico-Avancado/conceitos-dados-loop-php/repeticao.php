<?php 

$c = 1;
// também tem do-while
while ($c <= 15){
    echo $c .PHP_EOL;
    $c++;
}


for($i=1; $i<=15; $i++) echo $i . PHP_EOL;

for($i=1; $i<=15; $i++){
    if ($i == 13);
    else echo $i . PHP_EOL;
}

for($i=1; $i<=15; $i++){
    if ($i == 13) continue;
    echo $i . PHP_EOL;
}