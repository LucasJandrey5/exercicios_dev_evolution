
<?php

do {
    print_r("------ Calculadora do Lucas ------" . PHP_EOL);

    $val1 = readline("Digite o primeiro número: ");
    if(!is_numeric($val1) ){
        print_r("Valor 1 inválido");
        continue;
    } 
    
    $val2 = readline("Digite o segundo número: ");
    if(!is_numeric($val2) ){
        print_r("Valor 2 inválido");
        continue;
    } 

    break;
} while(true);


print_r(PHP_EOL);
print_r(PHP_EOL);

print_r("Digite a operação desejada:" . PHP_EOL);
print_r("SUM (Soma)" . PHP_EOL);
print_r("SUB (Subtracao)" . PHP_EOL);
print_r("MULT (Multiplicação)" . PHP_EOL);
print_r("DIV (Divisao)" . PHP_EOL);
print_r("AVG (Média)" . PHP_EOL);

print_r(PHP_EOL);

$op = readline("Operação.: ");

print_r(PHP_EOL);

switch ($op) {
    case "SUM":
        print_r("Resultado: " . $val1 + $val2 . PHP_EOL);
        break;
    case "SUB":
        print_r("Resultado: " . $val1 - $val2 . PHP_EOL);
        break;
    case "MULT":
        print_r("Resultado: " . $val1 * $val2 . PHP_EOL);
        break;
    case "DIV":
        if($val2 === 0 ) {
            print_r("Valor 2 não pode ser 0");
            break;
        };
        print_r("Resultado: " . $val1 / $val2 . PHP_EOL);
        break;
    case "AVG":
        print_r("Resultado: " . ($val1 + $val2) /2 . PHP_EOL);
        break;
    default:
        print_r("Operação inválida " . PHP_EOL);
}
