<?php
require_once ROOT . '/models/Cart.php';
require_once ROOT . '/models/Product.php';
require_once ROOT . '/models/User.php';
class CartController
{
    public function actionAdd($id){
        Cart::addProduct($id);

//        return Cart::addProduct($id);

//        $referer = $_SERVER['HTTP_REFERER'];

//        header("Location: $referer");
    }

    public function actionIndex()
    {
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/viwes/cart/index.php');

        return true;
    }

    public function actionDelete($id){

        Cart::deleteProduct($id);

        header("Location: /cart/");
    }

    public static function actionCount(){
//        return Cart::countItem();
        if (isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity){
                $count = $count + $quantity;
            }
            echo $count;
        }else{
            echo 0;
        }

    }

}