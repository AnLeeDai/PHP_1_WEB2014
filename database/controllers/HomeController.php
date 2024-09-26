<?php

class HomeController
{
    public function index()
    {
        include('views/HeaderView.php');
        include('views/HomeView.php');
        include('views/FooterView.php');
    }
}