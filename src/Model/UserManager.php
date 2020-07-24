<?php


namespace Web\Model;


class UserManager
{
    protected $userDatabase;

    public function __construct()
    {
        $db = new DBConnect();
        $this->userDatabase = $db->connect();
    }

    public function getUser($email, $password)
    {
        $sql = "SELECT * FROM tbl_users WHERE email= :email AND password= :password";
        $stmt = $this->userDatabase->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function add($username,$pass,$email){
        $sql= "INSERT INTO `tbl_users`(`username`, `password`,`email`) VALUES (?, ?, ?)";
        $stmt= $this->userDatabase->prepare($sql);
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$pass);
        $stmt->bindParam(3,$email);
        $stmt->execute();

    }
}