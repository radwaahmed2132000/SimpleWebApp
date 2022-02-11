<?php

require_once 'Product.php';
require_once('./Request/AddProductRequest.php');
require_once 'connection.php';
class Book extends Product 
{
     /**
     *  @param int $weight
     */
    protected $input;
    private $weight;

     /**
    * constructor of Book
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
     * validate Book Products
     * @return bool
     */
    public function checkTypeValidation()
    {
        if (array_key_exists('weight', $this->input)) {
            if (!is_numeric($this->input['weight'])) {
                return false;
            }
        } else {
            return false;
        }
        $this->weight = $this->input['weight'];
        return true;
    }
     /**
     * create new  book
     *  @return void
     */
    public function store()
    {
        $product = DBConnection::getInst()->getConnection()->
        query("INSERT INTO products (sku,name,price,type,weight)
          VALUES('$this->sku' ,
          '$this->name',
          '$this->price',
          '$this->type',
          '$this->weight')");
    }
}
