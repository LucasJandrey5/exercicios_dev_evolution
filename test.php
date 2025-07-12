<?php

$val1 = 10;
$val1 = 5;

$val2 = 5;

$sum = $val1 + $val2;
$sub = $val1 - $val2;
$mult = $val1 * $val2;
$div = $val1 / $val2;
$mod = $val1 % $val2;

print_r("Soma: " . $sum . "\n");
print_r("Subtração: " . $sub . "\n");
print_r("Multiplicação: " . $mult . "\n");
print_r("Divisão: " . $div . "\n");
print_r("Mõdulo: " . $mod . "\n");

print_r(PHP_EOL);


print_r("Valores Dinânicos". PHP_EOL);
$val1 = readline("Digite o primeiro número: ");
$val2 = readline("Digite o segundo número: ");

print($val1 . " + " . $val2 ." = " . $val1 + $val2 . PHP_EOL);
print($val1 . " - " . $val2 ." = " . $val1 - $val2 . PHP_EOL);
print($val1 . " * " . $val2 ." = " . $val1 * $val2 . PHP_EOL);


