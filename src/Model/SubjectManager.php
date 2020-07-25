<?php


namespace Web\Model;


class SubjectManager
{
    protected $database;

    public function __construct()
    {

        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllSubject()
    {
        $sql = "SELECT * FROM tbl_subject ";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $subjects = [];
        foreach ($data as $item) {
            $subject = new Subject($item['name'],$item['description']);
            $subject->setId($item['id']);
            array_push($subjects, $subject);
        }
        return $subjects;
    }
    public function addSubject($subject)
    {
        $sql = "INSERT INTO tbl_subject( `name`, `description`) VALUES (:name , :description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $subject->getName());
        $stmt->bindParam(":description", $subject->getDescription());
        $stmt->execute();
    }

    public function getSubjectId($id)
    {
        $sql = "SELECT * FROM tbl_subject WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateSubject($subject)
    {
        $sql = "UPDATE `tbl_subject` SET `name`= :name,`description`= :description WHERE `id` =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $subject->getId());
        $stmt->bindParam(":name", $subject->getName());
        $stmt->bindParam(":description", $subject->getDescription());
        $stmt->execute();
    }

    public function deleteSubject($id)
    {
        $sql = "DELETE FROM tbl_subject WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

}