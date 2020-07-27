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
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id'],$item['image']);
            $student->setId($item['id']);
            array_push($students, $student);
        }
        return $students;
    }
    public function addStudent($student)
    {
        $sql = "INSERT INTO tbl_student( `name`, `age`, `gender`, `address`, `email`,`class_id`,`image`) VALUES (:name ,:age, :gender, :address, :email,:class_id, :image)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":age", $student->getAge());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":class_id", $student->getClassId());
        $stmt->bindParam(":image", $student->getImage());
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
        $sql = "UPDATE `tbl_student` SET `name`= :name,`age`= :age,`gender`= :gender,`address`= :address,`email`= :email ,`class_id`= :class_id,`image` = :image WHERE `id` =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student->getId());
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":age", $student->getAge());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":class_id", $student->getClassId());
        $stmt->bindParam(":image", $student->getImage());
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
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id'],$item['image']);
           $student->setId($item['id']);
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
            $student = new Student($item['name'], $item['age'], $item['gender'], $item['address'], $item['email'], $item['class_id'],$item['image']);
            array_push($students, $student);
        }
        return $students;
    }
    public function detailStudent($id)
    {
        $sql = "SELECT tbl_student.image, tbl_student.name ,tbl_class.name,tbl_student.age,tbl_student.gender,tbl_student.address, tbl_subject.name, tbl_score.score  FROM tbl_subject 
INNER JOIN tbl_score ON tbl_subject.id = tbl_score.subject_id
INNER JOIN tbl_student ON tbl_score.student_id = tbl_student.id 
INNER JOIN tbl_class ON tbl_student.class_id = tbl_class.id WHERE tbl_student.id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
       return $stmt->fetchAll();
    }
}