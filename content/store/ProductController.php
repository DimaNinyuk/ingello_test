<?php
class ProductController
{
    function create()
    {
        $id = $_GET["id"];
        $name = $_GET["name"];
        $price = $_GET["price"];
        echo $id . $name . $price;
    }
    function index()
    {
        echo "index";
    }
}
