<?php
require_once 'selectcourses.class.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentSystem";

if(isset($_POST['submit'])){
    $courseId= $_POST['course_id'];
    $course_name= $_POST['coursename'];
    $course_fee= $_POST['coursefee'];
    

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to update a record
  $sql = "UPDATE `courses` SET `course_name`= '$course_name',`course_fee`='$course_fee' WHERE course_id = '$courseId';";
 

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "records Updated succesful";
  header("location: ../courses/course.php");
} catch(PDOException $ex){
    echo $sql ."<br>" . $ex->getMessage();

}



}

?>
