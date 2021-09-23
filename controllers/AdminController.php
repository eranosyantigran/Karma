<?php
require_once ROOT.'/models/Admin.php';
class AdminController
{
    public function actionIndex(){
    if ($_SESSION['user'] == 'admin') {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $pice = $_POST['pice'];
            $desc = $_POST['description'];
            $img = $_FILES['image'];
            $top = $_POST['is_top'];
            $slide = $_POST['is_slide'];
            $status = $_POST['status'];
            $error = false;
            if ($_FILES['image']){
                $img = $_FILES['image']['name'];
                $source = $_FILES['image']['tmp_name'];
                $text = uniqid("_img_");
                $a = pathinfo($img, PATHINFO_EXTENSION );
                $img_name = $text . "." . $a;
                move_uploaded_file($source, $_SERVER['DOCUMENT_ROOT'] . "/templates/img/upload/" . $img_name);

                if (empty($top)) {

                    header("Location: /admin/index ");
                } else if (empty($slide)) {

                    header("Location: /admin/index ");
                } else if (empty($status)) {

                    header("Location: /admin/index ");
                }


                if (Admin::checkItem($name, $pice, $desc)) {
                    $errors[] = 'Lracreq Inputner@';
                }
                $admin = Admin::adminAdd($name, $pice, $desc, $top,  $img_name, $slide, $status);
            }

        }
        $adminka = Admin::adminOrder();
        require_once ROOT . '/viwes/admin/index.php';
        }else{
            header("Location: /login/login");
        }


    }
    public static function actionStatus($status, $id){

        $adminka = Admin::adminOrder();
        $update = Admin::updateStatus($status,$id);

        require_once ROOT . '/viwes/admin/index.php';
    }




}