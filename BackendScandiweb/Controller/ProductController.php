<?php

 require_once('./Model/Product.php');
 require_once('./Traits/WebServiceResponse.php');
 require_once('./Request/DeleteProductRequest.php');
 require_once('./Request/AddProductRequest.php');
 require_once('./Resource/ProductCollection.php');
class ProductController
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
        $product = new Product();
        $result = $product->index();
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
                $product = new Product();
                $product->delete($ids[$i]['id']);
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
        $product = new Product();
        $addProduct = new AddProductRequest();
        $result =  $addProduct->validateAdd($input);
        if (!$result) {
            return $this->errorResponse("Bad Request", "422");
        } else {
            if (!$product->uniqueSku($input['sku'])) {
                return $this->errorResponse("This sku is already exist", "422");
            }
            if ($input['type'] == 'DVD') {
                $product->store($input['sku'], $input['name'], $input['price'], $input['type'], null, null, null, $input['size'], null);
            } elseif ($input['type'] == 'Book') {
                $product->store($input['sku'], $input['name'], $input['price'], $input['type'], null, null, null, null, $input['weight']);
            } elseif ($input['type'] == 'Furniture') {
                $product->store($input['sku'], $input['name'], $input['price'], $input['type'], $input['width'], $input['height'], $input['length'], null, null);
            }
        }
        return $this->generalResponse("", "ok");
    }
}
