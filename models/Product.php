<?php
require_once ROOT . '/Db.php';
class Product
{

    public static function getProductById($id){
        $id = intval($id);

        $db = Db::getConnection();

        $productsList = [];
        $result = $db->query("SELECT id, name, pice, description, image  FROM products WHERE id ='$id' ");
        $i = 0;
        while($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['pice'] = $row['pice'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }
    public static function getProdustsByIds($idsArray){

        $products = [];
        $db = Db::getConnection();
        $idsString = implode(', ' , $idsArray );

        $sql = "SELECT * FROM products WHERE status = 1 AND id IN ($idsString)";

        $result = $db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()){
            $products[$i]['id'] = $row['id'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['pice'] = $row['pice'];
            $products[$i]['image'] = $row['image'];
            $i++;
        }
        return $products;

    }


}