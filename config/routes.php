<?php
return [

    'login/registration' => 'login/registration',
    'login/login' => 'login/login',
    'admin/index' => 'admin/index' ,
    'admin/status/([0-9]+)/([0-9]+)' => 'admin/status/$1/$2',
    'cabinet/logout' => 'cabinet/logout',
    'cabinet/index' => 'cabinet/index',
    'story/story/([0-9]+)' => 'story/story/$1',
    'cabinet/cabinet' => 'cabinet/cabinet',
    'by/index/([0-9]+)' => 'by/index/$1',
    'cabinet/registration' => 'login/registration',
    'cart/index/([0-9]+)' => 'cart/add/$1',
    'cart/count' => 'cart/count',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart' => 'cart/index',
    'product/products/([0-9]+)' => 'product/products/$1',
	'' => 'site/index'
];