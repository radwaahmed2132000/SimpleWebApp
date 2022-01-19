<?php
interface DeleteProductRequestInterface
{
    public function validateDelete($input);
}
class DeleteProductRequest implements DeleteProductRequestInterface
{
    /**
    * constructor of  delete product request
    * @return void
    */
    public function __construct()
    {
    }
    /**
     * validate request body of delete product
     * @param array $input
     * @return bool
     */
    public function validateDelete($input)
    {
        if (array_key_exists('id', $input)) {
            if (is_numeric($input['id'])) {
                return true;
            }
        }
        return false;
    }
}
