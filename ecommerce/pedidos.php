<?php

function cadastrarPedidos()
{
    global $produtos;
    global $clientes;

    $c = selectCliente();
    $cliente = $clientes[$c];

    clearScreen();

    $p = selectProduto();
    $produto = $produtos[$p];

    bl(2);

    $qtd = readline("Digite a quantidade desejada: ");
    $desc = readline("Digite o desconto aplicado: ");
    
    $novo_pedido = [
        "produto" => $p,
        "quantidade" => $qtd,
        "desconto" => $desc
    ];

    $cliente["pedidos"][] = $novo_pedido;

    $clientes[$c] = $cliente;

    return $clientes;
}

function mostrarPedidos($cliente)
{
    global $produtos;

    clearScreen();
    print_r("===== Pedidos do(a) " . $cliente["nome"] . " =====\n");
    print_r(value: "id      nome               qtd        valor unit    desc         total\n");
    
    $total = 0;

    if(!isset($cliente["pedidos"])){
        clearScreen();
        print_r("Usuário não possui pedidos!");
        bl(6);
        return;
    }

    foreach ($cliente["pedidos"] as $k => $pedido) {
        $produto = $produtos[$pedido["produto"]];
        $valor_total = $produto["preco"] * $pedido["quantidade"] - $pedido["desconto"];
        $total += $valor_total;

        print_r($k);
        print_r("       ");
        print_r($produto["nome"]);
        print_r("         ");
        print_r($pedido["quantidade"]);
        print_r("         R$");
        print_r($produto["preco"]);
        print_r("           R$");
        print_r($pedido["desconto"]);
        print_r("        R$");
        print_r($valor_total);
        print_r("\n");
    }

    bl(2);

    print_r("\nValor total: R$" . $total);
}
