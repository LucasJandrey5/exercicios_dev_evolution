<?php
print_r(PHP_EOL);
print_r("---------- Loja do Lucas ----------");
print_r(PHP_EOL . "" . PHP_EOL);

$val = readline("Digite o valor da compra: " . PHP_EOL);

print_r(PHP_EOL);

print_r("Digite o tipo de cliente:" . PHP_EOL);
print_r("1 - Normal" . PHP_EOL);
print_r("2 - VIP" . PHP_EOL);
print_r("3 - VIP Plus" . PHP_EOL);
print_r("4 - VIP Max Plus Ultra" . PHP_EOL);
print_r("5 - Dono" . PHP_EOL);

$tipoCliente = readline("Tipo........: ");

$txTipoCliente = [
    1 => 0,
    2 => 0.1,
    3 => 0.2,
    4 => 0.5,
    5 => 1
];

if(!isset($txTipoCliente[$tipoCliente])){
    print_r("\n\nTipo de cliente inválido!\n\n");
    return;
}

$desc_cliente += $val * $txTipoCliente[$tipoCliente]; 


print_r(PHP_EOL);

$qtd = readline("Digite a quantidade de items comprados: " . PHP_EOL);

print_r(PHP_EOL);

print_r("Digite o tipo de pagamento:" . PHP_EOL);
print_r("1 - Dinheiro" . PHP_EOL);
print_r("2 - PIX" . PHP_EOL);
print_r("3 - Débito" . PHP_EOL);
print_r("4 - Crédito" . PHP_EOL);

$tipoPagamento = readline("Tipo........: ");

$desc = 0;



if($qtd > 10){
    $desc += $val + 0.05; 
}

switch ($tipoPagamento) {
    case 1: //dinheiro
        $desc += $val * 0;
        break;
    case 2: //pix
        $desc += $val * 0.1;
        break;
    case 3: //debito
        $desc += 0;
        break;
    case 4: //credito
        $desc += 0;
        break;
    default:
        printf("\n\nTipo pagamento inválido!\n\n");
        return;
}

$res = $val - $desc;

print_r(PHP_EOL);
print_r(PHP_EOL);

print_r("Valor da conta.......: R$". $val . PHP_EOL);
print_r("Valor do desconto....: R$". $desc . PHP_EOL);

print_r(PHP_EOL);

print_r("=============================". PHP_EOL);
print_r("Valor final..........: R$". $res . PHP_EOL);

if($res < 0){
    $res = $res < 0 ? $res *= -1 : $res ;
    print_r("\n\nUau, a loja te deve......: R$" . $res . "\n\n\n");
}