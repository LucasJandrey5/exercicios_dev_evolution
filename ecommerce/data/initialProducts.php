<?php

$initialProdutos = [
    1 => [
        "nome" => "camisa G",
        "preco" => 49.9,
        "estoque" => 3,
    ],
    2 => [
        "nome" => "Boné",
        "preco" => 39.9,
        "estoque" => 3,
    
    ],
    3 => [
        "nome" => "Jaqueta",
        "preco" => 149,
        "estoque" => 3,
    
    ],
    4 => [
        "nome" => "Tenis",
        "preco" => 299,
        "estoque" => 10,
    ],
];

foreach($initialProdutos as $p){
    criarProduto($p["nome"], $p["preco"], $p["estoque"]);
}