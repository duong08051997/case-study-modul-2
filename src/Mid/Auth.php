<?php

namespace Web\Mid;
class Auth

{
    function isLogin()
    {
        if (!isset($_SESSION['isLogin']) || !$_SESSION['isLogin']) {
            header("location:src/View/login/login.php");
        }
    }
}
