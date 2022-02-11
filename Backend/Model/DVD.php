<?php

 require_once 'Product.php';
 require_once('./Request/AddProductRequest.php');
 require_once 'connection.php';
class DVD extends Product
{
      /**
     *  @param int $size
     */
    protected $input;
    private $size;
     /**
    * constructor of DVD
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
     * validate DVD Products
     * @return bool
     */
    public function checkTypeValidation()
    {
        if (array_key_exists('size', $this->input)) {
            if (!is_numeric($this->input['size'])) {
                return false;
            }
        } else {
            return false;
        }
         $this->size = $this->input['size'];
        return true;
    }
     /**
     * create new DVD
     *  @return void
     */
    public function store()
    {
        $product = DBConnection::getInst()->getConnection()->
        query("INSERT INTO products (sku,name,price,type,size)
          VALUES('$this->sku' ,
          '$this->name',
          '$this->price',
          '$this->type',
          '$this->size')");
    }
}
