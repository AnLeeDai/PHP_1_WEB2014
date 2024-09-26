<?php

namespace models;

use PDO;
use PDOException;

class Database
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    public $connection;

    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    public function connect()
    {
        try {
            $this->connection = new PDO(
                "mysql:host=$this->db_host;dbname=$this->db_name",
                $this->db_user,
                $this->db_pass
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<script>alert('Kết nối databse thành công!');</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Lỗi kết nối databse: " . $e->getMessage() . "');</script>";
            die();
        }
    }

    public function disconnect()
    {
        if ($this->connection !== null) {
            $this->connection = null;
            echo "<script>alert('Ngắt kết nối databse thành công!');</script>";
        }
    }
}
