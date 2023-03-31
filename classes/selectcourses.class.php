<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';


class SelectCourses extends Dbh{
 
 public function fetchcoursedata(){
     $sql = "SELECT * FROM courses";
     $stmt = $this->connect()->prepare($sql); 
     $stmt->execute();
     while ($result = $stmt->fetchAll()){
         return $result;
     }
}
public function selectbyId($courseId)
{
 $sql = "SELECT * FROM courses where course_id=$courseId";
 $stmt = $this->connect()->prepare($sql); 
 $stmt->execute();
 while ($result = $stmt->fetchAll()){
     return $result;
 }
}
}
 ?>
