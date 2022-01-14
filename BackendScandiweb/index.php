<?php

require_once('./Controller/ProductController.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode('/', $uri);

$requestMethod = $_SERVER["REQUEST_METHOD"];
$productController = new ProductController();


if ($requestMethod == 'GET') {
    echo $productController->getAllProduct();
} elseif ($requestMethod == 'POST' and $uri[2] == 'add') {
    $input = (array) json_decode(file_get_contents('php://input'), true);
    echo $productController->createProduct($input);
    // here should be delete method not post method but free version not support delete
} elseif ($requestMethod == 'POST' and $uri[2] == 'del') {
    $input =  json_decode(file_get_contents('php://input'), true);
     echo $productController->deleteProduct($input);
}
// https://scandiwebtasg.000webhostapp.com/index.php/del
