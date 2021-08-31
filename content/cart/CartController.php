<?php 
class CartController{
    function addToCart(){
        $id = $_GET["id"];
        if(isset($_COOKIE["cart"])){
            $cart = unserialize($_COOKIE["cart"]);
            if(!in_array($id,$cart)){
                array_push($cart,$id);
            }
        }
        else{
            $cart = array();
            array_push($cart,$id);
            setcookie("cart",serialize($cart));
        }
    }
    function delreFromCart(){
        $id = $_GET["id"];
        if(isset($_COOKIE["cart"])){
            $cart = unserialize($_COOKIE["cart"]);
            if(in_array($id,$cart)){
                unset($cart[array_search($id,$cart)]);
                setcookie("cart",serialize($cart));
            }
        }
        
    }
}
?>