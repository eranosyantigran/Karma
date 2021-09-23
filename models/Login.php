<?php
require_once ROOT . '/Db.php';
class Login
{

    public static function  registration($name, $login, $pass){
        $db = Db::getConnection();
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = $db->query("INSERT INTO `user` (user_name, login, password)
                                            VALUES ('$name', '$login', ' $pass')");
    }

}