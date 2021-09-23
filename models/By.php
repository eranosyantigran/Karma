<?php
require_once ROOT . '/Db.php';

class By
{
    public static function getProductsBy(){
        $userid = $_SESSION['user'];
        $product_id = array_keys($_SESSION['products']);
        $product_count =  array_values($_SESSION['products']);
        $date = date("Y-m-d H:i:s");
        $i = 0;
        $db = DB::getConnection();
        foreach ($product_id as $id){
            $a = $product_count[$i];
            $sql = "INSERT INTO `product_user` (user_id, product_count, product_id, status , date) 
                    VALUES ('$userid' , '$a', '$id' , '4' , '$date')";
            $result = $db->query($sql);
            $result =  $result->fetch();
            if(!$result){
                require_once ROOT . '/viwes/by/index.php';
            }
        }return true;

    }


}