<?php

class Db
{
    public static function getConnection(){
       $params = include (ROOT . "/config/db_params.php");

        $db = new PDO("mysql:host={$params['host']}; dbname={$params['db_name']}" , $params['login'] , $params['password'] );
        $db->exec('set names utf8');

        return $db;
    }

}