<?php

class HomeController
{
    public function index()
    {
        // load view on controller
        require_once('views/layouts/header.php');
        require_once('views/homes/index.php');
        require_once('views/layouts/footer.php');
    }
}