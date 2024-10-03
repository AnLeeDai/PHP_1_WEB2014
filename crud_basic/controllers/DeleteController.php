<?php

namespace controllers;

class DeleteController
{
    public function __construct()
    {
        include('views/HeaderView.php');

        $this->delete();
    }

    public function delete()
    {
        echo 'Delete';
    }

    public function __destruct()
    {
    }
}