<?php


namespace Web\Controller;


use Web\Model\Score;
use Web\Model\ScoreManager;
use Web\Model\StudentManager;

class ScoreController
{
    protected $scoreController;
    protected $studentManager;

    public function __construct()
    {
        $this->scoreController = new ScoreManager();
        $this->studentManager = new StudentManager();
    }

    public function getAllScore()
    {
        $student_id = $_REQUEST['student_id'];
        $scores = $this->scoreController->getAllScore($student_id);
        $student = $this->studentManager->getStudentId($student_id);
        include("src/View/Score/list.php");
    }
    public function addScore()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $student_id = $_GET['id'];
            $student = $this->studentManager->getStudentId($student_id);
            include('src/View/Score/add.php');
        } else {
            $student_id = $_GET['id'];
            $student = $this->studentManager->getStudentId($student_id);
            $maths = $_REQUEST['maths'];
            $physical = $_REQUEST['physical'];
            $chemistry = $_REQUEST['chemistry'];
            $english = $_REQUEST['english'];
            $student_id = $student['id'];
            $score = new Score($maths, $physical, $chemistry, $english, $student_id);
            $this->scoreController->addScore($score);
            header("location:index.php?page=list-score&student_id=$student_id");
        }
    }
    public function updateScore()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_GET['id'];
            $score = $this->scoreController->getScoreId($id);
            include 'src/View/Score/update.php';
        } else {
            $id = $_REQUEST['id'];
            $maths = $_REQUEST['maths'];
            $physical = $_REQUEST['physical'];
            $chemistry = $_REQUEST['chemistry'];
            $english = $_REQUEST['english'];
            $student_id = $_REQUEST['student_id'];
            $score = new Score($maths, $physical, $chemistry, $english, $student_id);
            $score->setId($id);
            $this->scoreController->updateScore($score);
            var_dump($score);
            header("location:index.php?page=list-score&student_id=$student_id");

        }
    }
    public function deleteScore()
    {
        $id = $_REQUEST['id'];
        $this->scoreController->deleteScore($id);
        header("location:index.php?page=list-score&student_id=$id");
    }
}