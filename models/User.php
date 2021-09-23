<?php
require_once ROOT . '/Db.php';
class User
{
    public static function checkPassword($login, $pass){
        $db = DB::getConnection();
        $sql = 'SELECT password FROM `user` WHERE login = :login';
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();
        $hash = $result->fetch();
        if(password_verify($pass, trim($hash[0]))){
           return true;
        }
    }



    public static  function checkLogged(){

        if (isset($_SESSION['user'])){
            return $_SESSION['user'];
        }

    }
    public static function getUserById($login){
            $db = Db::getConnection();
            $sql = "SELECT id FROM `user` WHERE login = '$login'";
            $result = $db->query($sql);
            $result =  $result->fetch();
            return $result[0];
    }
    public static function actionLogout(){

        unset($_SESSION["user"]);

        header("Location: /");
    }

    public static function getUpdate($login , $oldpass ,  $pass){
        $db = DB::getConnection();

        $sql = "SELECT * FROM `user` WHERE login = '$login'";
        $result = $db->query($sql);
        $result  = $result->fetch();


        if ($result){
            if (password_verify($oldpass , trim($result['password']))){

            $pass = password_hash($pass , PASSWORD_DEFAULT);

            $sql = "UPDATE `user` SET  `password` = '$pass' WHERE `login` = '$login' ";
            $result1 = $db->query($sql);
            $result1 = $result1->fetch();
                return true;
            }return false;
        }return false;


    }




}