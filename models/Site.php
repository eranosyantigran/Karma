<?php
require_once ROOT . '/Db.php';
class Site
{
    public static function actionDb(){
        $db = Db::getConnection();

        $productsList = [];
        $result = $db->query('SELECT id, name, pice, is_slide, image FROM products WHERE is_slide = "1" LIMIT 8');
        $i = 0;
        while($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['is_slide'] = $row['is_slide'];
            $productsList[$i]['pice'] = $row['pice'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }
    public static function getSlider(){
        $db = Db::getConnection();

        $productsList = [];
        $result = $db->query('SELECT  id, name, pice, is_slide, image FROM products WHERE is_slide = "0" LIMIT 8 ');
        $i = 0;
        while($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['is_slide'] = $row['is_slide'];
            $productsList[$i]['pice'] = $row['pice'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }
    public static function getProduct(){

        $db = Db::getConnection();

        $productsList = [];
        $result = $db->query('SELECT id, name, pice, description , is_top, image  FROM products WHERE is_top = "1" ');
        $i = 0;
        while($row = $result->fetch()){

            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['pice'] = $row['pice'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['is_top'] = $row['is_top'];
            $productsList[$i]['image'] = $row['image'];

            $i++;
        }
        return $productsList;
    }



}