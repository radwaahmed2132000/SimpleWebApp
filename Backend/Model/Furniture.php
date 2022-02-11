<?php

 require_once 'Product.php';
 require_once('./Request/AddProductRequest.php');
 require_once 'connection.php';
class Furniture extends Product
{
      /**
     *  @param int $width
     *   @param int $length
     *    @param int $height
     */
    protected $input;
    private $width;
    private $height;
    private $length;
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
        $this->width = $this->input['width'];
        $this->height = $this->input['height'];
        $this->length = $this->input['length'];
        return true;
    }
     /**
     * create new Furniture
     *  @return void
     */
    public function store()
    {
        $product = DBConnection::getInst()->getConnection()->
        query("INSERT INTO products (sku,name,price,type,width,height,length)
          VALUES('$this->sku' ,
          '$this->name',
          '$this->price',
          '$this->type',
          '$this->width',
          '$this->height',
          '$this->length')");
    }
}
