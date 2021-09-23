<?php
require_once ROOT .'/Db.php';

class Story
{
    public static function addStory($id){

        $db = Db::getConnection();
        $sql = "SELECT user.id, products.pice, products.name, products.description, product_user.product_count, 
                status.status, product_user.product_id 
                FROM `product_user` JOIN products ON products.id = product_user.product_id 
                JOIN `user` ON user.id = product_user.user_id 
                JOIN status ON status.status_id = product_user.status  WHERE product_user.user_id = :iid ";
        $result = $db->prepare($sql);
        $result->bindParam(':iid' , $id , PDO::PARAM_INT);
        $result->execute();
        return $result;
    }
}