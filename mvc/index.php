<?php

include('config.php');
require_once('controllers/container_controller.php');

$containerController = new container_controller();
$containerController->index();