<?php
session_start();

use Web\Controller\ClassController;
use Web\Controller\StudentController;
use Web\Controller\ScoreController;
use Web\Controller\SubjectController;
use Web\Mid\Auth;

require __DIR__ . "/vendor/autoload.php";
$auth = new Auth();
$auth->isLogin();


$classController = new ClassController();
$studentController = new StudentController();
$subjectController = new SubjectController();
$scoreController = new ScoreController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div>
        <?php
        include('src/View/Menu/menu2.php');
        ?>
    </div>
    <div class="pt-3">
        <?php

        switch ($page) {
            case "list-class":
                $classController->getAllClass();
                break;
            case "add-class":
                $classController->addClass();
                break;
            case "update-class":
                $classController->updateClass();
                break;
            case "delete-class":
                $classController->deleteClass();
                break;
            case "list-student":
                $studentController->getAllStudent();
                break;
            case "add-student":
                $studentController->addStudent();
                break;
            case "update-student":
                $studentController->updateStudent();
                break;
            case "delete-student":
                $studentController->deleteStudent();
                break;
            case "search-student":
                $studentController->searchStudent();
                break;
            case "detail-student":
                $studentController->detailStudent();
                break;
            case "list-subject":
                $subjectController->getAllSubject();
                break;
            case "add-subject":
                $subjectController->addSubject();
                break;
            case "update-subject":
                $subjectController->updateStudent();
                break;
            case "delete-subject":
                $subjectController->deleteSubject();
                break;
            case "get-score":
                $scoreController->getAllScore();
                break;
            case "list-score":
                $scoreController->viewScore();
                break;
            case "add-score":
                $scoreController->add();
                break;
            default:
                $classController->getAllClass();
        }
        ?>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"/>

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"/>

</html>
