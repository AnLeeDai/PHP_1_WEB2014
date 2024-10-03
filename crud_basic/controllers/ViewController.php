<?php

namespace controllers;

use models\Database;
use models\ProductModel;

class ViewController
{
    private $db;
    private $productModel;

    public function __construct()
    {
        require_once 'models/Database.php';
        require_once 'models/ProductModel.php';

        $db_host = 'localhost';
        $db_name = 'crud_basic';
        $db_user = 'root';
        $db_pass = '';

        $this->db = new Database($db_host, $db_name, $db_user, $db_pass);
        $this->db->connect();

        $this->productModel = new ProductModel($this->db);

        $this->view();

    }

    public function view()
    {
        $productList = $this->productModel->getAll();
        require_once 'views/HeaderView.php';
        require_once 'views/ListProductView.php';
    }

    public function __destruct()
    {
    }
}
