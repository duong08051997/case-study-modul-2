<?php


namespace Web\Controller;

use Web\Model\Score;
use Web\Model\ScoreManager;
use Web\Model\StudentManager;
use Web\Model\SubjectManager;

class ScoreController
{
    protected $studentManager;
    protected $subjectManager;
    protected $scoreController;

    public function __construct()
    {
        $this->studentManager = new StudentManager();
        $this->subjectManager = new SubjectManager();
        $this->scoreController = new ScoreManager();
    }

    public function getAllScore()
    {
        $students = $this->studentManager->getAllStudent();
        $subjects = $this->subjectManager->getAllSubject();
        $scores = $this->scoreController->getAllScore();
        include('src/View/Score/list.php');

    }

    public function viewScore()
    {
        $scoress = $this->scoreController->viewScore();
        include("src/View/Score/list.php");
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $students = $this->studentManager->getAllStudent();
            $subjects = $this->subjectManager->getAllSubject();
            include('src/View/Score/add.php');
        } else {
            $student_id = $_REQUEST['student_id'];
            $subject_id = $_REQUEST['subject_id'];
            $score = $_REQUEST['score'];
            $this->scoreController->addScore($student_id,$subject_id,$score);
            header("location:index.php?page=list-score");
        }
    }


}