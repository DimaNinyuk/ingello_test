<?php
 
 
$fn = (key($_GET)) ? '/' : 'content/index.php';
$fn = (key($_GET)) ? '/user/auth/create-token' : 'content/user/AuthController.php';
$fn = (key($_GET)) ? 'content/' : 'content/index.php';
$fn = (key($_GET)) ? 'content/': 'content/index.php';
 
(file_exists($fn)) ? require $fn : require 'content/error404.php' ;
(file_exists($fn)) ? require $fn : require 'content/error404.php' ;
(file_exists($fn)) ? require $fn : require 'content/error404.php' ;
(file_exists($fn)) ? require $fn : require 'content/error404.php' ;

?>