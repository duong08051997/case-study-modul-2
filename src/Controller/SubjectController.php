<?php


namespace Web\Controller;


use Web\Model\StudentManager;
use Web\Model\Subject;
use Web\Model\SubjectManager;

class SubjectController
{
    protected $subjectController;
    protected $studentManager;

    public function __construct()
    {
        $this->subjectController = new SubjectManager();
        $this->studentManager = new StudentManager();
    }
    public function getAllSubject()
    {
        $subjects=$this->subjectController->getAllSubject();
        include('src/View/Subject/list.php');
    }
    public function addSubject()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $students = $this->studentManager->getAllStudent();
            include('src/View/Subject/add.php');
        } else {
            $name = $_REQUEST['name'];
            $description = $_REQUEST['description'];
            $subject = new Subject($name, $description);
            $this->subjectController->addSubject($subject);
            header("location:index.php?page=list-subject");
        }
    }
    public function updateStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {

            $id = $_REQUEST['id'];
            $subject = $this->subjectController->getSubjectId($id);
            include('src/View/Subject/update.php');
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $description = $_REQUEST['description'];
            $subject = new Subject($name, $description);
            $subject->setId($id);
            $this->subjectController->updateSubject($subject);
            header("location:index.php?page=list-subject");
        }
    }
    public function deleteSubject()
    {
        $id = $_REQUEST['id'];
        $this->subjectController->deleteSubject($id);
        header("location:index.php?page=list-subject");
    }


}