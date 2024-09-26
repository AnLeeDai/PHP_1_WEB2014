<?php

use controllers\ClientController;

require_once('controllers/ClientController.php');

$clientController = new ClientController();
$clientController->index();