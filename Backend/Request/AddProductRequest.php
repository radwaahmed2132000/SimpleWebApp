<?php

require_once('./Model/Book.php');
require_once('./Model/DVD.php');
require_once('./Model/Furniture.php');

class AddProductRequest
{
    /**
    * constructor of  add product request
    * @return void
    */
    public function __construct()
    {
    }
    /**
     * validate request body of add product
     * @param array $input
     * @return bool
     */
    public function validateAdd($input)
    {
        if ($input['type'] == 'Book') {
             $product = new Book($input);
        } elseif ($input['type'] == 'DVD') {
            $product = new DVD($input);
        } elseif ($input['type'] == 'Furniture') {
            $product = new Furniture($input);
        } else {
            return false;
        }
        if (!$product->checkValidation()) {
            return false;
        }
        if (! $product->checkTypeValidation()) {
            return false;
        }
        if (!$product->uniqueSku()) {
            return false;
        }
        $product->store();
        return true;
    }
}
