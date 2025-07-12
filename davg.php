<?php 

$arr = array() ;

print_r("Digite uma por uma as notas (-1 caso terminou de inserir)" . PHP_EOL);

$n = 1;
do {
    $val;
    $val = readline(PHP_EOL."Nota " . $n . ": " );

    if(!is_numeric($val)) {
        print_r("Valor inválido!". PHP_EOL);
        continue;
    }

    if($val < 0){
        break;
    }

    $arr[] = $val;
    $n++;
}while (true);

$sum = array_sum($arr);
$avg = $sum / count($arr);

print_r(PHP_EOL);
print_r("Average: " . $avg);
print_r(PHP_EOL);
