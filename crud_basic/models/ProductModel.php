<?php

namespace models;

use PDO;
use PDOException;

class ProductModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM products";
            $stmt = $this->db->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log('Database Error (getAll): ' . $e->getMessage());
            die();
        }
    }

    public function createProduct($product_name, $product_price, $product_description, $product_image)
    {
        try {
            $sql = "INSERT INTO products (product_name, product_price, product_description, product_image) VALUES (:product_name, :product_price, :product_description, :product_image)";
            $stmt = $this->db->connection->prepare($sql);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':product_price', $product_price);
            $stmt->bindParam(':product_description', $product_description);
            $stmt->bindParam(':product_image', $product_image);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log('Database Error (createProduct): ' . $e->getMessage());
            die();
        }
    }
}
