<?php
 include('content/SiteController.php');
 include('content/user/AuthController.php');
 include('content/store/ProductController.php');
 $p = key($_GET);
//$fn = ($p = key($_GET)) ? 'content/' . $p . '/index.php' : 'content/index.php';
//$fn2 = ($p = key($_GET)) ? 'site/contact/' : 'content/SiteController.php';
 if($p == "site/contact"){
    $obj = new  SiteController();
    $obj->contact();

 }
 else if($p == ""){
    require_once('content/index.php');
 }
 else if($p == "user/auth/create-token"){
    $obj = new AuthController();
    $obj->createToken();
 }
 else if($p == "store/product/create"){
    $obj = new ProductController();
    $obj->create();
 }
 else if($p =="store/product"){
    $obj = new ProductController();
    $date = $_GET["date"];
    $obj->index($date);
 }
 else{
     require_once("content/error404.php");
 }
//(file_exists($fn2)) ? require $fn2 : require 'content/error404.php'; 


?>