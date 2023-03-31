<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';

class SelectEnrolled extends Dbh{
 
    public function fetchdata(){
        $sql = "SELECT firstname,lastname, courses.course_name FROM students INNER JOIN enrollment 
        ON students.student_id = enrollment.student_id JOIN courses ON courses.course_id= enrollment.course_id WHERE students.student_id = 7;";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute();
        while ($result = $stmt->fetchAll()){
            return $result;
        }
}
public function selectbyId($studentId)
{
    $sql = "SELECT firstname,lastname, courses.course_name FROM students INNER JOIN enrollment 
    ON students.student_id = enrollment.student_id JOIN courses ON courses.course_id= enrollment.course_id WHERE students.student_id=$studentId";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}


}


