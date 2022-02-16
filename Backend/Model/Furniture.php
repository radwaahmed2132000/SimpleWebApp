<?php

 require_once 'Product.php';
 require_once('./Request/AddProductRequest.php');
 require_once 'connection.php';
class Furniture extends Product
{
    protected $input;
     /**
    * constructor of Furniture
    * @return void
    */
    public function __construct($input)
    {

           $this->input = $input;
           $this->sku = $input['sku'];
           $this->name = $input['name'];
           $this->price = $input['price'];
           $this->type = $input['type'];
    }
     /**
     * validate Furniture Products
     * @return bool
     */
    public function checkTypeValidation()
    {
        if (array_key_exists('width', $this->input)) {
            if (!is_numeric($this->input['width'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('height', $this->input)) {
            if (!is_numeric($this->input['height'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('length', $this->input)) {
            if (!is_numeric($this->input['length'])) {
                return false;
            }
        } else {
            return false;
        }
        return true;
    }
}
