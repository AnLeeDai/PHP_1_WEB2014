<?php

namespace controllers;

use models\Database;
use models\NewsModel;

class ClientController
{
    private $database;
    private $newsModel;

    public function __construct()
    {
        global $db_host, $db_name, $db_user, $db_pass;

        include('config.php');
        require_once('models/Database.php');
        require_once('models/NewsModel.php');

        $this->database = new Database($db_host, $db_name, $db_user, $db_pass);

        $this->newsModel = new NewsModel($this->database);
    }

    public function index()
    {
        $newsList = $this->newsModel->getAllNews();

        include('views/HeaderView.php');
        include('views/ClientView.php');
        include('views/FooterView.php');
    }


    public function __destruct() {}
}
