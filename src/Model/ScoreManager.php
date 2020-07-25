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

        $sql = "SELECT * FROM tbl_score";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $arr =[];
        foreach ($data as $item){
            $score = new Score($item['student_id'],$item['subject_id'],$item['score']);
            array_push($arr,$score);
        }
        return $arr;
    }

    public function viewScore()
    {
        $sql = "SELECT tbl_student.name , tbl_subject.name, tbl_score.score  FROM tbl_subject 
INNER JOIN tbl_score ON tbl_subject.id = tbl_score.subject_id
INNER JOIN tbl_student ON tbl_score.student_id = tbl_student.id ORDER BY tbl_student.name";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}