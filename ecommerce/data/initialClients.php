<?php

$initialClients = [
    [
        "nome" => "Lucas", 
        "email" => "lucas@gmail.com",
        "telefone" => "(49) 99949-9254",
        "senha" => 1234,
    ],
    [
        "nome" => "joao", 
        "email" => "joao@gmail.com",
        "telefone" => "(49) 99949-9254",
        "senha" => 1234,
    ]
];


foreach($initialClients as $c){
    criarCliente($c["nome"], $c["email"], $c["telefone"], $c["senha"]);
}