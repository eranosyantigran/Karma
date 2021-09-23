<?php
    require_once ROOT . '/Db.php';
class Cart
{
    public static function addProduct($id){
        $id = intval($id);
        $productsInCart = [];
        if (isset($_SESSION['products'])){
            $productsInCart = $_SESSION['products'];
        }
        if (array_key_exists($id , $productsInCart)){
            $productsInCart[$id]++;
        }else{
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;
        setcookie($_SESSION['user'] , json_encode($_SESSION['products']) , time() + 3600*24*365 , "/", "", false, true);

        $db = Db::getConnection();
        $sql = "SELECT user.id, products.pice, products.name FROM `product_user`
                JOIN products ON products.id = product_user.product_id
                JOIN `user` ON user.id = product_user.user_id";
        $result = $db->query($sql);
        return self::countItem();
    }

    public static function countItem(){
        if (isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity){
                $count = $count + $quantity;
            }
            return $count;
        }else{
            return 0;
        }
    }
    public static function getProducts(){
        if (isset($_SESSION['products'])){

            return $_SESSION['products'];
        }
        return false;
    }
    public static function getTotalPrice($cookie){
        $productsInCart = self::getProducts();

        if ($productsInCart){
            $total = 0;
            foreach ($cookie as $item){
                $total += $item['pice'] * (int)$productsInCart[$item['id']];
            }
        }
        return $total;
    }
    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;
    }
}