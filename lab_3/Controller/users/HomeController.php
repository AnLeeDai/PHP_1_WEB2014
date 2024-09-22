<?php
class HomeController{
    public function index(){
        include('Views/layout/header.php');
        include('Views/home/index.php');
        include('Views/layout/footer.php');
    }
}