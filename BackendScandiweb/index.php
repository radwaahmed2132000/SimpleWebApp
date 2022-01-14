<?php

require_once('./Controller/ProductController.php');

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,DELETE");
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
$requestMethod = $_SERVER["REQUEST_METHOD"];
$productController = new ProductController();
if ($requestMethod == 'GET') {
    echo"i am get";
    echo $productController->getAllProduct();
} elseif ($requestMethod == 'POST') {
    echo"i am post";
    $input = (array) json_decode(file_get_contents('php://input'), true);
    echo $productController->createProduct($input);
} elseif ($requestMethod == 'DELETE') {
    echo" i am delete";
    $input =  json_decode(file_get_contents('php://input'), true);
    echo  $input;
     echo $productController->deleteProduct($input);
}
