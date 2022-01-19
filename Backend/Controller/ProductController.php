<?php

 require_once('./Model/Product.php');
 require_once('./Traits/WebServiceResponse.php');
 require_once('./Request/DeleteProductRequest.php');
 require_once('./Request/AddProductRequest.php');
 require_once('./Resource/ProductCollection.php');
interface ProductControllerInterface
{
    public function getAllProduct();
    public function deleteProduct($ids);
    public function createProduct($input);
}
class ProductController implements ProductControllerInterface
{
    use WebServiceResponse;

     /**
    * constructor of productController
    * @return void
    */
    public function __construct()
    {
    }
     /**
    * get all products
    * @return \Json
    */
    public function getAllProduct()
    {
        $result = Product::index();
        // product resource
        $productCollection = new ProductCollection();
        $arr = $productCollection->json($result);
        return $this->generalResponse(($arr), "ok");
    }
    /**
     * delete produtcs using ids
     * @param array $ids
     * @return \Json
     */
    public function deleteProduct($ids)
    {
        for ($i = 0; $i < count($ids); $i++) {
            // validation of request of delete
            $deleteProduct = new DeleteProductRequest();
            if ($deleteProduct->validateDelete($ids[$i])) {
                Product::delete($ids[$i]['id']);
            } else {
                return $this->errorResponse("The id field is required and should be numeric value", "422");
            }
        }
        return $this->generalResponse("", "ok");
    }
     /**
     * create  new product
     * @param array $ids
     * @return \Json
     */
    public function createProduct($input)
    {
        $addProduct = new AddProductRequest();
        $result =  $addProduct->validateAdd($input);
        $product = new Product($input);
        if (!$result) {
            return $this->errorResponse("Bad Request", "422");
        } else {
            if (!Product::uniqueSku($input['sku'])) {
                return $this->errorResponse("This sku is already exist", "422");
            } else {
                     $product ->store();
            }
        }
        return $this->generalResponse("", "ok");
    }
}
