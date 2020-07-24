<?php
namespace Web\Model;
use PDO;
class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=case_study;charset=utf8';
        $this->username = "duong";
        $this->password = "Gaubeo@";
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (Exception $e) {
            echo "lỗi: ", $e->getMessage(), "\n";
        }

    }


}