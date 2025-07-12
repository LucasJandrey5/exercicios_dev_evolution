<?php

require "./clientes.php";
require "./produtos.php";

require "./util.php";
require "./menus.php";

require "./data/initialClients.php";
require "./data/initialProducts.php";

do {
    clearScreen();
    mainMenu();
    print_r("\n\n");
} while (true);


