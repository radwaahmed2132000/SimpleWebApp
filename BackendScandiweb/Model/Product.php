<?php

require_once 'connection.php';

class Product
{
    /**
    * constructor of product
    * @return void
    */
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInst()->getConnection();
    }
    /**
     *  get all products
     *  @return array $product
    */
    public function index()
    {
        $product = $this->dbConnection->query("SELECT * FROM  products");
        return $product;
    }
    /**
     * create new product
     *  @param string $sku
     *  @param string $name
     *  @param int $price
     *  @param string $type
     *  @param int $width
     *  @param int $height
     *  @param int $length
     *  @param int $size
     *  @param int $weight
     *  @return array $product
     */
    public function store($sku, $name, $price, $type, $width = null, $height = null, $length = null, $size = null, $weight = null)
    {
        $product = $this->dbConnection->query("INSERT INTO products (sku,name,price,type,width,height,length,size,weight)
          VALUES('$sku','$name','$price','$type','$width','$height','$length','$size','$weight')");
        return $product;
    }
    /**
     * delete product
     * @param int $id
     * @return void
    */
    public function delete($id)
    {
        $this->dbConnection->query("DELETE FROM products WHERE id='$id'");
    }
     /**
     * check unique of sku in products
     * @param string $sku
     * @return void
    */
    public function uniqueSku($sku)
    {
        $product = $this->dbConnection->query("SELECT COUNT(*) FROM products WHERE sku='$sku'");
        $totalcount = $product->fetch_assoc();
        if ($totalcount['COUNT(*)'] > 0) {
            return false;
        }
        return true;
    }
}
