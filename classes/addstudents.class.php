<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';

class AddStudents extends Dbh{

    protected function setStudent($firstname,$lastname,$gender,$email,$mobile,$birthdate){
        $sql= "INSERT INTO `students`(`firstname`, `lastname`, `gender`, `email`, `mobile`, `birthdate`) VALUES ( ?,?,?,?,?,?);";
        $stmt = $this->connect()->prepare($sql); 
        
        if(!$stmt->execute(array($firstname,$lastname,$gender,$email,$mobile,$birthdate))){
            $stmt = null;
            header("location: ../students/students.php?error=stmtfailed1");
        }
        $stmt = null;
    }

   protected function checkStudent($username,$email){
        $sql = "SELECT 'firstname' FROM students WHERE firstname=? OR email = ?;";
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute(array($firstname,$email))){
            $stmt = null;
            header("location: ../students/students.php?error=stmtfailed2");
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