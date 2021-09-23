<?php
require_once ROOT . '/models/Product.php';
class ProductController
{
    public function actionProducts($id){


        $pro = Product::getProductById($id);

        require_once ROOT . '/viwes/product/products.php';
    }


}