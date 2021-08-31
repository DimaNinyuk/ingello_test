<?php
 

$fn = ($p = key($_GET)) ? 'content/' . $p . '/index.php' : 'content/index.php';
$fn2 = ($p = key($_GET)) ? 'site/contact/' : 'content/SiteController.php';
 
(file_exists($fn2)) ? require $fn2 : require 'content/error404.php'; 


?>