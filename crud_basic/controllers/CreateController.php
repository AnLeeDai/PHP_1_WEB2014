<?php

namespace controllers;

use models\ProductModel;
use models\Database;

class CreateController
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

        require_once 'views/HeaderView.php';
        require_once 'views/CreateView.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->create();
        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_FILES['image'];

            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($image["name"]);
            move_uploaded_file($image["tmp_name"], $targetFile);

            $this->productModel->createProduct($name, $price, $description, $targetFile);

            exit();
        }
    }


    public function __destruct()
    {
    }
}
