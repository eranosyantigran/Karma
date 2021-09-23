<?php
require_once ROOT . '/models/Login.php';
require_once ROOT . '/models/Admin.php';
require_once ROOT . '/models/User.php';

class LoginController
{
    public function actionLogin(){

        require_once ROOT. '/viwes/login/login.php';
    }


    public function actionRegistration(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $name = $_POST['name'];
            $login = $_POST['login'];
            $pass = $_POST['password'];
            $error = [];

            if (!Admin::chekName($name)){
                $error[] = 'Error Name';
            }
            if (!Admin::checkLogin($login)){
                $error[] = 'Error Login';
            }
            if (!Admin::chekPass($pass)){
                $error[] = 'Error Password';
            }
            if (!$error){
                $reg = Login::registration($name, $login, $pass);
            }
                header("Localhost: /login/login");
        }

        require_once ROOT. '/viwes/login/registration.php';
    }
//    public function actionCabinet(){
//
//        $userId = User::checkLogged();
//        $user = User::getUserById();
//
//
//        require_once ROOT. '/viwes/cabinet/index.php';
//    }
}