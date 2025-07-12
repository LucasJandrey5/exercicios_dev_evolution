
<?php 

function clearScreen()
{
    bl(20);
}

function waitEnter(){
    bl();
    readline("Pressione enter para continuar...");
}

function bl($n = 1){
    for($i = 0; $i < $n; $i++)
        print_r("\n");
}

function singleMessage($message){
    bl(20);
    print_r("              ". $message);
    bl(7);
    waitEnter();
}