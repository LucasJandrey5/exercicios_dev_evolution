<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
#products {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#products td, #products th {
  border: 1px solid #ddd;
  padding: 8px;
}

#products tr:nth-child(even){background-color: #f2f2f2;}

#products tr:hover {background-color: #ddd;}

#products th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body class="w-full bg-gray-100 flex flex-col justify-center  h-[100dvh]">

    <a href="/">
      voltar  
    </a>

    <table id="products" class="max-w-[800px] self-center">
        <tr >
            <th>Index</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>



<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['products'])) {
  $_SESSION['products'] = [];
}

$products = $_SESSION['products'];

foreach ($products as $k =>  $p){
    echo "<tr><td>". $k . "</td><td>". $p["name"] . "</td><td>". $p["category"] . "</td><td>". $p["price"] . "</td></tr>";
}

?> 

    </table>

</body>
</html>