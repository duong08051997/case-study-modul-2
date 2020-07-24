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
}