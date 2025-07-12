<?php

function cadastrarCliente()
{
    print_r("\n\n===== Cadastra Cliente =====");
    bl();
    print_r("Digite o dados do cliente ");
 
    $nome = readline("Nome: ");
    $email = readline("Email: ");
    $senha = readline("Senha: ");
    $telefone = readline("Telefone: ");
    bl();
    
    criarCliente($nome, $email, $telefone, $senha);
}


function mostrarClientes()
{
    global $clientes;
    bl();
    print_r(value: "id      nome               email        telefone\n");

    foreach ($clientes as $k => $cliente) {
        print_r($k);
        print_r("       ");
        print_r($cliente["nome"]);
        print_r("         ");
        print_r($cliente["email"]);
        print_r("         ");
        print_r($cliente["telefone"]);
        print_r("         \n");
    }
    bl();
}

function selectCliente()
{
    print_r("\n\n===== Selecione a cliente desejada =====\n");
    mostrarClientes();

    bl(2);
    return readline("Cliente.: ");
}

function criarCliente($nome, $email, $telefone, $senha){
    global $clientes;
    
    foreach($clientes as $c){
        if($c["email"] === $email) {
            singleMessage("Já existe um usário com esse email!");
            return;
        }
    }

    $nova_cliente = [
        "nome" => $nome,
        "email" =>  $email,
        "telefone" =>  $telefone,
        "senha" =>  $senha,
        "pedidos" => []
    ];

    $clientes[] = $nova_cliente;
}