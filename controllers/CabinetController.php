<?php
require_once  ROOT . '/models/User.php';
require_once  ROOT . '/models/Admin.php';

class CabinetController
{
    public function actionIndex()
    {
        $result = false;


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login'];
            $pass = $_POST['password'];
            $error = [];
            if (Admin::checkLogin($login)) {
                $error[] = 'Error Login';
            } else {
                if (!User::checkPassword($login, $pass)) {
                    $error[] = 'Erroro Password';
                } else {
                    if ($_POST['login'] != 'tigo123') {
                        $_SESSION['user'] = User::getUserById($login);
                        if (!isset($_COOKIE[$_SESSION['user']])){
                            setcookie($_SESSION['user'] , 'cart' , time() + 3600*24*365 , "/", "", false, true);
                        }else{
                            $_SESSION['products'] = (array)json_decode($_COOKIE[$_SESSION['user']]);
                        }
                        header("Location: /cabinet/cabinet");
                    } else {
                        $_SESSION['user'] = "admin";
                        header("Location: /admin/index");
                    }
                }
            }
        }


        require_once ROOT . '/viwes/login/registration.php';
    }


    public function actionCabinet()
        {


//
//            if (isset($_COOKIE[$_SESSION['user']])){
//                $_SESSION['products'] = $_COOKIE[$_SESSION['user']];
////                setcookie($_SESSION['user'], json_encode($_SESSION['products']), time() + 3600*24*5 , "/", "", false, true);
////                $user_id =  (array)json_decode($_COOKIE[$_SESSION['user']]);
//            }



            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $pass = $_POST['password'];
                $oldpass = $_POST['oldpass'];
                $login = $_POST['login'];
                $error = [];

                if (Admin::checkLogin($login)){
                    $error[] = 'Error Login';
                }else{
                    User::getUpdate($login ,$oldpass , $pass );
                    $error[] = 'Duq popoxeciq dzer tvyalner@';
                }

            }



            require_once ROOT . '/viwes/cabinet/cabinet.php';

        }

    public static function actionLogout(){

        unset($_SESSION["user"]);
        session_destroy();

        header("Location: /");
    }



}