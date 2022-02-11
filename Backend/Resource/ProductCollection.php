<?php
interface ProductCollectionInterface
{
    public function json($input);
}
class ProductCollection implements ProductCollectionInterface
{
    /**
    * constructor of   product collection
    * @return void
    */
    public function __construct()
    {
    }
      /**
    *  create json of     product collection
    * @param array $result
    * @return \Json
    */
    public function json($result)
    {
        $arr = [];
            while ($row = $result->fetch_assoc()) {
                $response = [];
                //create resources of product
                $response['name'] = $row ['name'];
                $response['sku'] = $row['sku'];
                $response['price'] = $row['price'];
                $response['width'] = $row['width'];
                $response['height'] = $row['height'];
                $response['length'] = $row['length'];
                $response['size'] = $row['size'];
                $response['weight'] = $row['weight'];
                $response['type'] = $row['type'];
                $response['id'] = $row['id'];
                array_push($arr, $response);
            }
        
        return $arr;
    }
}
?>
