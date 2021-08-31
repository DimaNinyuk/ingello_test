<?php
 
$fn = ($p = key($_GET)) ? 'content/' . $p . '/index.php' : 'content/index.php';
 
(file_exists($fn)) ? require $fn : require 'content/error404.php';
?>