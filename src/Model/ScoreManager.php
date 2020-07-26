<?php


namespace Web\Model;


class ScoreManager
{
    protected $database ;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    public function getAllScore()
    {

        $sql = "SELECT * FROM tbl_score ";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $scores =[];
        foreach ($data as $item){
            $score = new Score($item['student_id'],$item['subject_id'],$item['score']);
            array_push($scores,$score);
        }
        return $scores;
    }

    public function viewScore()
    {
        $sql = "SELECT tbl_student.id,tbl_subject.id, tbl_student.name ,tbl_class.name, tbl_subject.name, tbl_score.score  FROM tbl_subject 
INNER JOIN tbl_score ON tbl_subject.id = tbl_score.subject_id
INNER JOIN tbl_student ON tbl_score.student_id = tbl_student.id
 INNER JOIN tbl_class ON tbl_student.class_id = tbl_class.id ORDER BY tbl_student.name";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addScore($student_id,$subject_id,$score)
    {
        $sql = "INSERT INTO `tbl_score`(`student_id`, `subject_id`, `score`) VALUES (? , ?, ?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$student_id);
        $stmt->bindParam(2,$subject_id);
        $stmt->bindParam(3,$score);
        $stmt->execute();
    }
public function deleteScore($student_id,$subject_id)
{
    $sql = "DELETE FROM DELETE FROM `tbl_score` WHERE `student_id` = ? AND `subject_id` = ? ";
    $stmt = $this->database->prepare($sql);
    $stmt->bindParam(1,$student_id);
    $stmt->bindParam(1,$subject_id);
    $stmt->execute();

}


}