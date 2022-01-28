<?php

interface AddProductRequestInterface
{
    public function validateAdd($input);
}
class AddProductRequest implements AddProductRequestInterface
{
    /**
    * constructor of  add product request
    * @return void
    */
    public function __construct()
    {
    }
    /**
     * validate request body of add product
     * @param array $input
     * @return bool
     */
    public function validateAdd($input)
    {
        $type = ['Book','DVD','Furniture'];
        if (array_key_exists('price', $input)) {
            if (!is_numeric($input['price'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('name', $input)) {
            if (empty($input['name'])) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('type', $input)) {
            if (empty($input['type'])) {
                return false;
            }
            if (!in_array($input['type'], $type)) {
                return false;
            }
        } else {
            return false;
        }
        if (array_key_exists('sku', $input)) {
            if (empty($input['sku'])) {
                return false;
            }
            // if (!preg_match('^[a-z0-9A-Z]{10,20}$^', $input['sku'])) {
            //     return false;
            // }
        } else {
            return false;
        }
        if ($input['type'] == 'DVD') {
            if (array_key_exists('size', $input)) {
                if (!is_numeric($input['size'])) {
                    return false;
                }
            } else {
                return false;
            }
        } elseif ($input['type'] == 'Book') {
            if (array_key_exists('weight', $input)) {
                if (!is_numeric($input['weight'])) {
                    return false;
                }
            } else {
                return false;
            }
        } elseif ($input['type'] == 'Furniture') {
            if (array_key_exists('width', $input)) {
                if (!is_numeric($input['width'])) {
                    return false;
                }
            } else {
                return false;
            }
            if (array_key_exists('height', $input)) {
                if (!is_numeric($input['height'])) {
                    return false;
                }
            } else {
                return false;
            }
            if (array_key_exists('length', $input)) {
                if (!is_numeric($input['length'])) {
                    return false;
                }
            } else {
                return false;
            }
        }

        return true;
    }
}
