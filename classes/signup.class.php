<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';

class Signup extends Dbh{

    protected function setUser($firstname,$lastname,$email,$mobile,$username,$password){
        $sql= "INSERT INTO `teachers` ( `firstname`, `lastname`,  `email`, `mobile`, `username`,`password`) VALUES ( ?,?,?,?,?,?);";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->connect()->prepare($sql); 
        
        if(!$stmt->execute(array($firstname,$lastname,$email,$mobile,$username,$hashedPassword))){
            $stmt = null;
            header("location: ..index.php?error=stmtfailed1");
        }
        $stmt = null;
    }

   protected function checkUser($username,$email){
        $sql = "SELECT 'username' FROM teachers WHERE username=? OR email = ?;";
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute(array($username,$email))){
            $stmt = null;
            header("location: ..index.php?error=stmtfailed2");
            exit();
        }
       // return $resultCheck;

        if($stmt->rowCount() > 0){
           $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
?>