<?php
require_once 'selectstudents.class.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentSystem";

    $id= $_REQUEST['graduateid'];
   

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to update a record
  $sql = "UPDATE `students` SET `status`='graduate' WHERE student_id = '$id';";
 

  // use exec() because no results are returned
  $conn->exec($sql);
  header('location:..students/graduated.php');
} catch(PDOException $ex){
    echo $sql ."<br>" . $ex->getMessage();



}


?>
