<?php

require_once 'controllers/ViewController.php';
require_once 'controllers/CreateController.php';
require_once 'controllers/EditController.php';
require_once 'controllers/DeleteController.php';

$route = isset($_GET['route']) ? $_GET['route'] : 'index';

switch ($route) {
    case 'create':
        $create = new \controllers\CreateController();
        break;
    case 'edit':
        $edit = new \controllers\EditController();
        break;
    case 'delete':
        $delete = new \controllers\DeleteController();
        break;
    default:
        $view = new \controllers\ViewController();
        break;
}
