<?php

namespace Web\Controller;
use Web\Model\ClassManager;
use Web\Model\ClassRoom;

class ClassController
{
    protected $classController;

    public function __construct()
    {
        $this->classController = new ClassManager();
    }

    public function getAllClass()
    {
        $classes = $this->classController->getAllClass();
        include('src/View/Class/list.php');
    }
    public function addClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include('src/View/Class/add.php');
        }else{
            $name = $_REQUEST['name'];
            $status = $_REQUEST['status'];
            $class = new ClassRoom($name,$status);
            $this->classController->addClass($class);
            header('location:index.php?page=list-class');
        }
    }
    public function updateClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $class = $this->classController->getClassId($id);
            include('src/View/Class/update.php');
        }else{
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $status = $_REQUEST['status'];
            $class = new ClassRoom($name,$status);
            $class->setId($id);
            $this->classController->updateClass($class);
            header('location:index.php?page=list-class');
        }
    }
    public function deleteClass()
    {
        $id =$_REQUEST['id'];
        $this->classController->deleteClass($id);
        header('location:index.php?page=list-class');
    }

}