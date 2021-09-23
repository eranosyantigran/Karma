<?php
    require_once ROOT . '/Db.php';
class Admin
{
    public static function adminAdd($name, $pice, $desc, $top, $img_name, $slide, $status){

        $db = Db::getConnection();

            $result = $db->query("INSERT INTO products (name , pice , description , is_top , image , is_slide , status)
                                            VALUES ('$name','$pice' ,' $desc' , '$top', '$img_name','$slide','$status')");


    }

    public static function chekName($name){
        if (strlen($name) >= 2){
            return true;

        }
        return false;
    }
    public static function checkLogin($login){
        $db = Db::getConnection();

        $sql = "SELECT login FROM `user` WHERE login = :login";

        $result = $db->prepare($sql);
        $result->bindParam(':login' , $login , PDO::PARAM_STR);
        $result->execute();
        $a = $result->fetch();

        if(!empty($a)){
            return false;
        }
        return true;
    }

    public static function chekPass($pass){
        if (strlen($pass) >= 6){
            return true;
        }
        return false;
    }
    public static function checkItem($name,$pice,$desc){
        if (empty($name) && empty($pice) && empty($desc) ){
            return false;
        }
        return true;
    }

    public static function adminOrder(){

        $db = Db::getConnection();

        $sql = "SELECT user.user_name, user.login, products.pice, products.name, status.status_id, product_user.id FROM `product_user` 
                JOIN products ON products.id = product_user.product_id 
                JOIN `user` ON user.id = product_user.user_id 
                JOIN status ON status.status_id = product_user.status
                ";
        $result = $db->query($sql);
        return $result;
    }
    public static function updateStatus($status , $id){

        $db = Db::getConnection();
        $sql = "UPDATE `product_user` SET status = :status WHERE id = :iid";
        $result = $db->prepare($sql);
        $result->bindParam(':iid' , $id , PDO::PARAM_INT);
        $result->bindParam(':status' , $status , PDO::PARAM_INT);
        $result->execute();
        $result = $result->fetch();

    }



}