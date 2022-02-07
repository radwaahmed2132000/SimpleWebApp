<?php

abstract class  AllProduct
{


    abstract  public static function index();
    abstract public function store();
    abstract public static function delete($id);
    abstract public static function uniqueSku($sku);
}

?>