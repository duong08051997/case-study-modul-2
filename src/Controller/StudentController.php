<?php


namespace Web\Controller;


use Web\Model\ClassManager;
use Web\Model\Student;
use Web\Model\StudentManager;

class StudentController
{
    protected $studentController;
    protected $classManager;

    public function __construct()
    {
        $this->studentController = new StudentManager();
        $this->classManager = new ClassManager();
    }
    public function getAllStudent()
    {
        $students=$this->studentController->getAllStudent();
        include('src/View/Student/list.php');
    }
    public function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $classes = $this->classManager->getAllClass();
            include('src/View/Student/add.php');
        } else {
            $file = $_FILES['my-file']['tmp_name'];
            $path = "uploads/" . $_FILES['my-file']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $class_id = $_REQUEST['class_id'];
            $student = new Student($name, $age, $gender, $address, $email, $class_id,$path);
            $this->studentController->addStudent($student);
            header("location:index.php?page=list-student");
        }
    }
    public function updateStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $classes = $this->classManager->getAllClass();
            $id = $_REQUEST['id'];
            $student = $this->studentController->getStudentId($id);
            include('src/View/Student/update.php');
        } else {
            $file = $_FILES['my-file']['tmp_name'];
            $path = "uploads/" . $_FILES['my-file']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $id = $_REQUEST['id'];
            $student = $this->studentController->getStudentId($id);
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $gender = $_REQUEST['gender'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $class_id = $_REQUEST['class_id'];
            $student = new Student($name, $age, $gender, $address, $email, $class_id,$path);
            $student->setId($id);
            $this->studentController->updateStudent($student);
            header("location:index.php?page=list-student");
        }
    }
    public function deleteStudent()
    {
        $id = $_REQUEST['id'];
        $this->studentController->deleteStudent($id);
        header("location:index.php?page=list-student");
    }
    function searchStudent(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $id = $_REQUEST['id'];
            $this->studentController->getStudentId($id);
            $keyword = $_POST['keyword'];
            $classes = $this->classManager->getAllClass();
            $students = $this->studentController->searchStudent($keyword);
            include_once 'src/View/Student/search.php';
        }
    }
    public function detailStudent()
    {
        if ($_SERVER['REQUEST_METHOD']=="GET") {
            $id =$_REQUEST['student_id'];
            $studentss = $this->studentController->detailStudent($id);
            include ("src/View/Student/detail.php");
        }


    }
}