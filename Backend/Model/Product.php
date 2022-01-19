<?php

require_once 'connection.php';
interface ProductInterface
{
    public static function index();
    public function store();
    public static function delete($id);
    public static function uniqueSku($sku);
}
class Product implements ProductInterface
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
        $product = DBConnection::getInst()->getConnection()->query("SELECT * FROM  products");
        return $product;
    }
    /**
     * create new product
     *  @return array $product
     */
    public function store()
    {
        $product = DBConnection::getInst()->getConnection()->
        query("INSERT INTO products (sku,name,price,type,width,height,length,size,weight)
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
        DBConnection::getInst()->getConnection()->query("DELETE FROM products WHERE id='$id'");
    }
     /**
     * check unique of sku in products
     * @param string $sku
     * @return void
    */
    public static function uniqueSku($sku)
    {
        $product = DBConnection::getInst()->getConnection()->query("SELECT COUNT(*) FROM products WHERE sku='$sku'");
        $totalcount = $product->fetch_assoc();
        if ($totalcount['COUNT(*)'] > 0) {
            return false;
        }
        return true;
    }
}
