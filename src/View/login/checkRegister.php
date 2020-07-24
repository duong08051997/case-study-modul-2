<?php

require '../../../vendor/autoload.php';
use Web\Controller\UserController;


$controller = new UserController();
$controller->addUser();
