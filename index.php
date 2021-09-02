<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
require_once(ROOT.'/content/route/Router.php');


$router = new Router();
$router->run();
