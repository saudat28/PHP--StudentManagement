<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';

class SelectStudents extends Dbh{
 
    public function fetchdata(){
        $sql = "SELECT * FROM students";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute();
        while ($result = $stmt->fetchAll()){
            return $result;
        }
}
public function selectbyId($studentId)
{
    $sql = "SELECT * FROM students where student_id=$studentId";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}
public function fetchdataactive(){
    $sql = "SELECT * FROM students WHERE status='active';";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}
public function fetchgraduated(){
    $sql = "SELECT * FROM students WHERE status='graduate';";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}
public function setgraduate(){
    $sql = "UPDATE students SET 'status'='Graduated';";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}


public function fetchenrolledId($studentId){
    $sql = "SELECT students.student_id, firstname,lastname, courses.course_name FROM students INNER JOIN enrollment ON students.student_id = enrollment.student_id JOIN courses 
    ON courses.course_id= enrollment.course_id WHERE status= 'active' AND students.student_id = $studentId;";
     
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}
public function fetchenrolled(){
    $sql = "SELECT * FROM students INNER JOIN enrollment 
    ON students.student_id = enrollment.student_id WHERE status='active';";
    $stmt = $this->connect()->prepare($sql); 
    $stmt->execute();
    while ($result = $stmt->fetchAll()){
        return $result;
    }
}

}
