<?php

//Calculadora
print_r("Calculadora do lucas" . PHP_EOL);

$val1 = readline("Digite o valor da compra: ". PHP_EOL);
$val2 = readline("Digite o valor pago: ". PHP_EOL);

$dif = $val1 - $val2;

print_r("". PHP_EOL);

if($dif > 0) {
    print_r("Falta: R$" . $dif . PHP_EOL);
} else if ($dif < 0) {
    $dif *= -1;
    print_r("Troco: R$". $dif . PHP_EOL);
} else {
    print_r("Valor correto! não possui troco". PHP_EOL);
}

print_r("". PHP_EOL);