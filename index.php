<?php
 

$fn = ($p = key($_GET)) ? 'content/' . $p . '/index.php' : 'content/index.php';
$fn2 = ($p = key($_GET)) ? 'site/contact/' . $p . '/SiteController.php' : 'content/SiteController.php';
 
(file_exists($fn)) ? require $fn : require 'content/error404.php'; 


?>