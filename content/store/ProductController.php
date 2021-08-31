<?php
class ProductController
{
    function create()
    {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        echo $id . $name . $price;
    }
    function index($date)
    {
        echo $date;
    }
}
