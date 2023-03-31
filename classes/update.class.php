<?php
require_once 'selectstudents.class.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentSystem";

if(isset($_POST['submit'])){
    $studentId= $_POST['student_id'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $birthdate= $_POST['birthdate'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to update a record
  $sql = "UPDATE `students` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`email`='$email',`mobile`=' $mobile',`birthdate`='$birthdate' WHERE student_id = '$studentId';";
 

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "records Updated succesful";
} catch(PDOException $ex){
    echo $sql ."<br>" . $ex->getMessage();

}



}


?>
