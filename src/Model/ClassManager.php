<?php


namespace Web\Model;


class ClassManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllClass()
    {  $sql = "SELECT * FROM tbl_class";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $classes = [];
        foreach ($data as $item) {
            $class = new ClassRoom( $item['name'], $item['status']);
            $class->setId($item['id']);
            array_push($classes, $class);
        }
        return $classes;
    }
    public function addClass($class)
    {
        $sql = "INSERT INTO `tbl_class`( `name`, `status`) VALUES (:name, :status)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name",$class->getName());
        $stmt->bindParam(":status",$class->getStatus());
        $stmt->execute();
    }
    public function getClassId($id)
    {
        $sql = "SELECT * FROM tbl_class WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function updateClass($class)
    {
        $sql = "UPDATE `tbl_class` SET `name` = :name, `status` = :status WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$class->getId());
        $stmt->bindParam(":name",$class->getName());
        $stmt->bindParam(":status",$class->getStatus());
        $stmt->execute();
    }
    public function deleteClass($id)
    {
        $sql = "DELETE FROM tbl_class WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

    public function detailClass($id)
    {
        $sql = "SELECT tbl_class.name,tbl_student.image, tbl_student.name ,tbl_student.age,tbl_student.gender,tbl_student.address FROM tbl_class 
INNER JOIN tbl_student ON tbl_student.class_id = tbl_class.id WHERE tbl_class.id = :id";

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}