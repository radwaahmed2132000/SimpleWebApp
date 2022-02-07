<?php

abstract class ProductControllerLogic
{


    abstract public function getAllProduct();
    abstract public function deleteProduct($ids);
    abstract public function createProduct($input);
}

?>