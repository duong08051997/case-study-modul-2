<?php
session_start();
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="checklogin.php" method="post">
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-center" id="login-tab" data-toggle="tab" href="login.php" role="tab"
                           aria-controls="login" aria-selected="true"  >Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="newuser-tab" data-toggle="tab" href="register.php" role="tab"
                           aria-controls="newuser" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <h3 class="register-heading">Login</h3>
                        <div class="row register-form">
                            <div class="col-md-12 profile_card">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Password *"
                                               name="password"/>
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" class="btn btn-primary" value="Login"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

</form>
</body>
</html>