<?php

require_once('models/Database.php');

class ProductController
{
    public function listProducts()
    {
        $db = new Database('localhost', 'web_dienthoai', 'root', '');
        $db->connect();

        include('views/HeaderView.php');
        include('views/ProductView.php');
        include('views/FooterView.php');
    }
}