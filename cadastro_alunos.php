<?php

print_r("\n\n------ Escola do Lucas ------\n");


/*
*/

function menu($turmas)
{
    print_r("\n\n===== Menu =====\n");
    print_r("1 - Cadastrar turmas\n");
    print_r("2 - Mostrar turmas\n");
    print_r("3 - Cadastrar Alunos\n");
    print_r("4 - Mostrar alunos\n");
    print_r("5 - Cadastrar Notas\n");
    print_r("6 - Mostrar Notas\n");

    $op = readline("Digite a operação desejada: ");

    clearScreen();

    switch ($op) {
        case 1:
            $turmas = cadastrarTurma($turmas);
            break;
        case 2:
            print_r("\n\n===== Mostrar Turmas =====\n");
            mostrarTurmas($turmas);
            readline();
            break;
        case 3:
            $turmas = cadastrarAlunos($turmas);
            break;
        case 4:
            $t = selectTurma($turmas);
            $turma = $turmas[$t];
            mostrarAlunos($turma);
            readline();
            break;
        case 5:
            $turmas = cadastrarNotas($turmas);
            break;
        case 6:
            clearScreen();
            $t = selectTurma($turmas);
            $turma = $turmas[$t];
            clearScreen();
            $a = selectAluno($turma);
            $aluno = $turma["alunos"][$a];
            mostrarNotas($aluno);
            readline();
            break;
    }

    return $turmas;
}

function cadastrarTurma($turmas)
{
    print_r("\n\n===== Cadastra Turma =====\n");
    $nome = readline("Digite o nome da turma: \n");

    $nova_turma = [
        "nome" => $nome,
        "alunos" => []
    ];

    $turmas[] = $nova_turma;
    return $turmas;
}


function mostrarTurmas($turmas)
{
    foreach ($turmas as $k => $turma) {
        print_r("\n" . $k . " - " . $turma["nome"]);
    }
    print_r("\n");
}

function cadastrarAlunos($turmas)
{
    $t = selectTurma($turmas);
    $turma = $turmas[$t];

    $nome = readline("\n\nNome do aluno.: ");

    $novo_aluno = [
        "nome" => $nome,
        "notas" => []
    ];

    $turma["alunos"][] = $novo_aluno;

    $turmas[$t] = $turma;

    return $turmas;
}

function mostrarAlunos($turma)
{
    print_r("===== Alunos da " . $turma["nome"] . " =====\n");
    foreach ($turma["alunos"] as $k => $aluno) {
        print_r("\n" . $k . " - " . $aluno["nome"]);
    }

    print_r("\n");
}

function cadastrarNotas($turmas)
{
    $t = selectTurma($turmas);
    $turma = $turmas[$t];

    clearScreen();
    $a = selectAluno($turma);
    $aluno = $turma["alunos"][$a];
    
    do{
        clearScreen();
        mostrarNotas($aluno);

        $nota = readline("Digite uma nova nota (-1 para parar): ");

        if($nota < 0) break;

        if(!is_numeric($nota)){
            clearScreen();
            print_r("Valor inválido! tente novamente\n\n\n\n\n\n\n");
        }

        $aluno["notas"][] = $nota;
    }while(true);

    $turma["alunos"][$a] = $aluno;
    $turmas[$t] = $turma;
    return $turmas;
}

function mostrarNotas($aluno){
    print_r("[");
    foreach($aluno["notas"] as $k => $nota){
        print_r($nota);

        if( count($aluno["notas"]) != $k + 1)
            print_r(", ");
    }
    print_r("]\n");
}


function selectTurma($turmas)
{
    print_r("\n\n===== Selecione a turma desejada =====\n");
    mostrarTurmas($turmas);

    print_r(PHP_EOL . PHP_EOL);
    return readline("Turma.: ");
}

function selectAluno($turma)
{
    print_r("\n\n===== Selecione o aluno desejada =====\n");
    mostrarAlunos($turma);

    print_r(PHP_EOL . PHP_EOL);
    return readline("Aluno..: ");
}

function clearScreen()
{
    print_r("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
}

$turmas = [1 => [
    "nome" => "Turma A", 
    "alunos" => [
        1 => [
            "nome" => "lucas",
            "notas" => [5, 6, 7]
            ]
            ]
            ]
        ];

        

do {
    clearScreen();
    $turmas = menu($turmas);
    print_r("\n\n");
} while (true);



