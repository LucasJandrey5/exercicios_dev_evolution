<?php

print_r("\n\n------ Soma do Lucas ------\n");

$arr = [];

print_r("\n\nDigite número a número:");
print_r("\n ----  Digite 'exit' para parar ----\n");

$n = 1;
do {
    $val = readline("\nNúmero " . $n  . "..: ");

    if($val === "exit"){
        break;
    }
    
    if(!is_numeric($val)){
        print_r("\nValor inválido\n\n");
        continue;
    }

    $n++;
    $arr[] = $val;
} while (true);

$sum = array_sum($arr);

print_r("\n\nSoma: " . $sum . PHP_EOL );
