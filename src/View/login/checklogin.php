<?php
session_start();
require '../../../vendor/autoload.php';

use Web\Controller\UserController;

$controller = new UserController();


if ($_SERVER['REQUEST_METHOD']=="POST") {

    $email =$_REQUEST['email'];
    $pass =$_REQUEST['password'];
    $controller->login($email,$pass);

}else{
    $controller->logout();
}