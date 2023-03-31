<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';

class AddCourses extends Dbh{

    protected function setCourse($course_name,$course_fee){
        $sql= "INSERT INTO `courses`(`course_name`, `course_fee`) VALUES (?,?);";
        
        $stmt = $this->connect()->prepare($sql); 
        
        if(!$stmt->execute(array($course_name,$course_fee))){
            $stmt = null;
            header("location: ../courses/course.php?error=stmtfailed1");
        }
        $stmt = null;
    }

   protected function checkCourse($course_name,$course_fee){
        $sql = "SELECT 'course_name' FROM courses WHERE course_name=? OR course_fee = ?;";
        $stmt = $this->connect()->prepare($sql);
        if(!$stmt->execute(array($course_name,$course_fee))){
            $stmt = null;
            header("location: ../courses/course.php?error=stmtfailed2");
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