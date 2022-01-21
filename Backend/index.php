<?php

require_once('./Controller/ProductController.php');


// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);
$requestMethod = $_SERVER["REQUEST_METHOD"];
$productController = new ProductController();
// 12 for server deployment
if ($uri[12] == 'products' && $requestMethod == 'GET') {
    echo $productController->getAllProduct();
} elseif ($uri[12] == 'add' && $requestMethod == 'POST') {
    $input = (array) json_decode(file_get_contents('php://input'), true);
    echo $productController->createProduct($input);
} elseif ($uri[12] == 'del' && $requestMethod == 'POST') {
    $input =  json_decode(file_get_contents('php://input'), true);
     echo $productController->deleteProduct($input);
}




