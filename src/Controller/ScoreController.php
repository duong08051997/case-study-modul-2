<?php


namespace Web\Controller;

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
        $this->studentManager= new StudentManager();
        $this->subjectManager= new SubjectManager();
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
}