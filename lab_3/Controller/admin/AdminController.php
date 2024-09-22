<?php

class AdminController
{
    public function index()
    {
        include('Views/layout/header.php');
        include('Views/admin/index.php');
        include('Views/layout/footer.php');
    }
}