<?php

function mainMenu()
{
    global $clientes;

    print_r("\n\n================== Menu ==================\n");
    print_r("|                                       |\n");
    print_r("|  1 - Cadastrar Clientes               |\n");
    print_r("|  2 - Mostrar Clientes                 |\n");
    print_r("|                                       |\n");
    print_r("|  3 - Cadastrar Pedidos                |\n");
    print_r("|  4 - Mostrar Pedidos                  |\n");
    print_r("|                                       |\n");
    print_r("|  5 - Cadastrar Produtos               |\n");
    print_r("|  6 - Mostrar Produtos                 |\n");
    print_r("|                                       |\n");
    print_r("=========================================\n");
    bl();
    $op = readline("Digite a operação desejada: ");

    clearScreen();

    switch ($op) {
        case 1:
            cadastrarCliente();
            break;
        case 2:
            print_r("\n\n===== Mostrar Clientes =====\n");
            mostrarClientes();
            waitEnter();
            break;
        case 3:
            cadastrarPedidos();
            break;
        case 4:
            $t = selectCliente();
            $cliente = $clientes[$t];
            mostrarPedidos($cliente);
            bl();
            waitEnter();
            break;
        case 5:
            cadastrarProduto();
            break;
        case 6:
            mostrarProdutos();
            bl();
            waitEnter();
            break;
    }

    return $clientes;
}