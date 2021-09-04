<?php
session_start();
$con=mysqli_connect("localhost","root","","online_shopping");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/');
define('SITE_PATH','http://127.0.0.1/php/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>