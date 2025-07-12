<?php

function mostrarProdutos() {
    global $produtos;
    print_r("\n\n===== Produtos =====\n");

    foreach ($produtos as $k => $prod) {
        print_r("\n" . $k . " - " . $prod["nome"] . " - R$" . $prod["preco"]);
    }

}

function cadastrarProduto()
{
    print_r("\n\n===== Cadastra Produto =====");
    bl();
    print_r("Digite o dados do produto\n");
 
    $nome = readline("Nome................: ");
    $preco = readline("Preco...............: ");
    $estoque = readline("Estoque disponível..: ");
    bl();
    
    criarProduto($nome, $preco, $estoque);
}

function selectProduto(){
    mostrarProdutos();
    bl();
    $p = readline("Selecione o produto: ");
    return $p;
}

function criarProduto($nome, $preco, $estoque){
    global $produtos;

    foreach($produtos as $p){
        if($p["nome"] === $nome) {
            singleMessage("Este produto já existe!");
            return;
        }
    }
  
    if(!is_numeric($estoque) || $estoque < 0) {
        singleMessage("Estoque inválido!");
        return;
    }
    

    $novo_produto = [
        "nome" => $nome,
        "preco" => $preco,
        "estoque" => $estoque
    ];

    $produtos[] = $novo_produto;
}