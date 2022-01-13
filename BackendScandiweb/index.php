<?php

require_once('./Controller/ProductController.php');

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,DELETE");

echo "ok";
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
$requestMethod = $_SERVER["REQUEST_METHOD"];
$productController = new ProductController();
if ($uri[3] == 'products' && $requestMethod == 'GET') {
    echo $productController->getAllProduct();
} elseif ($uri[3] == 'products' && $requestMethod == 'POST') {
    $input = (array) json_decode(file_get_contents('php://input'), true);
    echo $productController->createProduct($input);
} elseif ($uri[3] == 'products' && $requestMethod == 'DELETE') {
    $input =  json_decode(file_get_contents('php://input'), true);
     echo $productController->deleteProduct($input);
}
