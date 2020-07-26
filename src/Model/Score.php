<?php


namespace Web\Model;

class Score
{
    protected $student_id;
    protected $subject_id;
    protected $score;
    public function __construct($student_id,$subject_id,$score)
    {
        $this->student_id=$student_id;
        $this->subject_id=$subject_id;
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     * @param mixed $subject_id
     */
    public function setSubjectId($subject_id)
    {
        $this->subject_id = $subject_id;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
}