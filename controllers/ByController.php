<?php
require_once ROOT . '/models/By.php';
class ByController
{
    public function actionIndex(){

        $add = By::getProductsBy();


        require_once ROOT . '/viwes/by/index.php';

    }


}