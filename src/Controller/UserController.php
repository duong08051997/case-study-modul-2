<?php
namespace Web\Controller;


use Web\Model\UserManager;

class UserController
{
    protected $userDB;

    public function __construct()
    {
        $this->userDB = new UserManager();
    }

    public function login($email, $password)
    {
        $result = $this->userDB->getUser($email, $password);
        if (is_array($result)) {
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $result;
            header('location: ../../../index.php');
        } else {
            header('location:login.php');
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:login.php');
    }

    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_REQUEST["username"];
            $email = $_REQUEST["email"];
            $pass = $_REQUEST["password"];
            $this->userDB->add($username, $pass,$email);
            header('location:login.php');
        }
    }
}