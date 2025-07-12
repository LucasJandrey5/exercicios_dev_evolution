<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form method="post" action="index.php">
        <div class="bg-gray-100">
            <h1 class="text-4xl font-bold mb-6">Novo Produto</h1>
            <a href="list.php">Lista</a>

            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded mb-4" required>

                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Categoria</label>
                <select name="category" class="w-full p-2 border border-gray-300 rounded mb-4">
                    <option value="Alimentos">Alimentos</option>
                    <option value="Eletrônicos">Eletrônicos</option>
                    <option value="Roupas">Roupas</option>
                </select><br>

                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Preço</label>
                <input type="number" id="price" name="price" class="w-full p-2 border border-gray-300 rounded mb-4" required>

                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>

<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createProduct(){
    $_SESSION["products"][] = [
        "name" => $_POST["name"],
        "category" => $_POST["category"],
        "price" => $_POST["price"]
    ];
    echo "<span>Produto criado com sucesso!</span>";
}

if (!isset($_SESSION['products'])) {
  $_SESSION['products'] = [];
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    createProduct();
}


?>
