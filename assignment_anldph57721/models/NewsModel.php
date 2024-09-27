<?php

namespace models;

use PDO;
use PDOException;

class NewsModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllNews()
    {
        $this->db->connect();
        $stmt = $this->db->connection->prepare(
            "
        SELECT baiviet.*, hinhanh.DuongDanHinh
        FROM baiviet
        LEFT JOIN hinhanh ON baiviet.HinhAnhID = hinhanh.HinhAnhID
    "
        );

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
