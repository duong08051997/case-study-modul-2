<?php


namespace Web\Model;


class StudentManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllStudent()
    {
        $sql = "SELECT * FROM tbl_student ";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id']);
            $student->setId($item['id']);
            array_push($students, $student);
        }
        return $students;
    }
    public function addStudent($student)
    {
        $sql = "INSERT INTO tbl_student( `name`, `age`, `gender`, `address`, `email`,`class_id`) VALUES (:name ,:age, :gender, :address, :email,:class_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":age", $student->getAge());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":class_id", $student->getClassId());
        $stmt->execute();
    }
    public function getStudentId($id)
    {
        $sql = "SELECT * FROM tbl_student WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateStudent($student)
    {
        $sql = "UPDATE `tbl_student` SET `name`= :name,`age`= :age,`gender`= :gender,`address`= :address,`email`= :email ,`class_id`= :class_id WHERE `id` =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student->getId());
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":age", $student->getAge());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":class_id", $student->getClassId());
        $stmt->execute();
    }
    public function deleteStudent($id)
    {
        $sql = "DELETE FROM tbl_student WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }
    public function searchStudent($keyword)
    {
        $sql = "SELECT * FROM tbl_student WHERE name LIKE :keyword ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id']);
            array_push($students, $student);
        }
        return $students;
    }
    public function view()
    {
        $sql = "SELECT * FROM tbl_student ";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id']);
            array_push($students, $student);
        }
        return $students;
    }
}