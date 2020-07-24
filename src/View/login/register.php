<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<!--<form action="checkRegister.php" method="post">-->
<!--    <label> Email</label>-->
<!--    <input type="text" name="email" placeholder="email">-->
<!--    <label> username</label>-->
<!--    <input type="text" name="username" placeholder="name">-->
<!--    <label> Password</label>-->
<!--    <input type="password" name="password" >-->
<!--    <button type="submit" >Sign up</button>-->

    <!------ Include the above in your HEAD tag ---------->
<form action="checkRegister.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col col-md-5">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">
                            Create an account
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form novalidate="novalidate" id="formSignUp">
                            <div id="errorSignUp">

                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Email: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input class="form-control" placeholder="email@example.com" name="email" type="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">Name: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input class="form-control" placeholder="Name" name="username"  type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">Password: </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input class="form-control" placeholder="confirm password" name="password"  type="password">
                                </div>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input id="term" type="checkbox">
                                    I have read and accepted  <a target="_blank" href="#">the terms and conditions of use.</a>
                                </label>
                            </div>

                            <button type="submit" id="btnSignUp" class="btn btn-primary" style="width: 127px;">Create an account</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <small>Already a member? <a class="alreadySignUp" href="login.php">Login here</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
</body>
</html>
