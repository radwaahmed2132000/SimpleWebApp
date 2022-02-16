<?php

require_once 'connection.php';


abstract class Product
{
    /**
     *   @param string $sku
     *  @param string $name
     *  @param int $price
     *  @param string $type
     */
    protected $input;
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    /**
    * constructor of product
    * @return void
    */
    public function __construct($input)
    {
    }
      /**
     * validate product
     * @return bool
     */
    public function checkValidation()
    {
        if (array_key_exists('price', $this->input)) {
            if (!is_numeric($this->input['price'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('name', $this->input)) {
            if (empty($this->input['name'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('sku', $this->input)) {
            if (empty($this->input['sku'])) {
                return false;
            }
        } else {
            return false;
        }
        return true;
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
     *  @return void
     */
    public function store()
    {
        $keys = array_keys($this->input);
        $values = array();
        foreach ($keys as $key) {
            array_push($values, $this->input[$key]);
        }

        $value = "'" . implode("', '", $values) . "'";
        $product  = DBConnection::getInst()->getConnection()->query("INSERT INTO products (" . implode(', ', $keys) . ") VALUES (" . $value . ")");
        return true;
    }
    /**
     * check product type validation
     *  @return bool
     */
    abstract public function checkTypeValidation();
    /**
     * delete any product
     * @param int $id
     * @return void
    */
    public static function delete($id)
    {
        DBConnection::getInst()->getConnection()->query("DELETE FROM products WHERE id='$id'");
    }
     /**
     * check unique of sku in all products
     * @param string $sku
     * @return void
    */
    public function uniqueSku()
    {
        $product = DBConnection::getInst()->getConnection()->query("SELECT COUNT(*) FROM products WHERE sku='$this->sku'");
        $totalcount = $product->fetch_assoc();
        if ($totalcount['COUNT(*)'] > 0) {
            return false;
        }
        return true;
    }
}
