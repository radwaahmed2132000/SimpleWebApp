<?php

require_once 'connection.php';
require_once 'AllProduct.php';

class Product extends AllProduct
{
    /**
     *   @param string $sku
     *  @param string $name
     *  @param int $price
     *  @param string $type
     *  @param int $width
     *  @param int $height
     *  @param int $length
     *  @param int $size
     *  @param int $weight
     */
    private $sku;
    private $name;
    private $price;
    private $type;
    private $width = null;
    private $height = null;
    private $length = null;
    private $size = null;
    private $weight = null;
    /**
    * constructor of product
    * @return void
    */
    public function __construct($input)
    {

            $this->name = $input['name'];
            $this-> type = $input['type'];
            $this->sku = $input['sku'];
            $this->price = $input['price'];
            $this->size = $input['size'] ?? null;
            $this->weight = $input['weight'] ?? null;
            $this->height = $input['height'] ?? null;
            $this->width = $input['width'] ?? null;
            $this->length = $input['length'] ?? null;
    }
    /**
     *  get all products
     *  @return array $product
    */
    public static function index()
    {
        $product = sqlsrv_query(DBConnection::getInst()->getConnection(), "SELECT * FROM  products");
        return $product;
    }
    /**
     * create new product
     *  @return array $product
     */
    public function store()
    {
        $product =  sqlsrv_query(DBConnection::getInst()->getConnection(), "INSERT INTO products 
        (sku,name,price,type,width,height,length,size,weight)
          VALUES('$this->sku' ,
          '$this->name',
          '$this->price',
          '$this->type',
          '$this->width',
          '$this->height',
          '$this->length',
          '$this->size',
          '$this->weight')");
        return $product;
    }
    /**
     * delete product
     * @param int $id
     * @return void
    */
    public static function delete($id)
    {
        sqlsrv_query(DBConnection::getInst()->getConnection(), "DELETE FROM products WHERE id='$id'");
    }
     /**
     * check unique of sku in products
     * @param string $sku
     * @return void
    */
    public static function uniqueSku($sku)
    {
        $product =  sqlsrv_query(DBConnection::getInst()->getConnection(), "SELECT COUNT(*) FROM products");
        while ($row = sqlsrv_fetch_array($product, SQLSRV_FETCH_ASSOC)) {
            if ($row['COUNT(*)'] > 0) {
                        return false;
            }
        }
        return true;
    }
}
