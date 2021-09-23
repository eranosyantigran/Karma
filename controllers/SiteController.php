<?php
require_once ROOT . '/models/Site.php';
class SiteController{

	public  function actionIndex(){

	    $product = Site::actionDb();
	    $product1 = Site::getProduct();
	    $slider = Site::getSlider();
        require ROOT . "/viwes/site/index.php";
    }

}