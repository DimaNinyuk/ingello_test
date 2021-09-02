<?php
class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = array(
            'site/contact' => 'content/SiteController@contact',
            'store/product/create' => 'content/store/ProductController@create',
            'user/auth/create-token'=>'content/user/AuthController@createToken',
            'store/product'=>'content/store/ProductController@index',
            'cart/add'=>'content/cart/CartController@addToCart',
            'cart/delete'=>'content/cart/CartController@delreFromCart',

        );
    }


    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function isUrlToRoute()
    {
        foreach ($this->routes as $key => $route) {
            if(strripos($this->getURI(),'?') == true){
                if ($key == substr($this->getURI(), 0, strpos($this->getURI(), '?'))) {
                    return $route;
                    break;
                }
            }
            if(strripos($this->getURI(),'?') == false){
                if ($key == $this->getURI()){
                    return $route;
                    break;
                }
            }
            
        }
    }
    public function run()
    {
        $isUrl = $this->isUrlToRoute();
        if (isset($isUrl)) {
            $res = substr($isUrl, 0, strpos($isUrl, '@'));
            $method = substr($isUrl, (strpos($isUrl, '@')+1));
            $nameControllerM = substr(strrchr($isUrl, "/"), 1);
            $nameController = substr($nameControllerM,0,strpos($nameControllerM, '@'));
            include($res . ".php");
            $obj = new  $nameController();
            $obj->$method();
        } else {
            require_once("content/error404.php");
        }
    }
}
