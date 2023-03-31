<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["submit"])){
        //grabbing the data
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $gender= $_POST["gender"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $birthdate= $_POST["birthdate"];
        

        //instatiate addstudentContrl class
        include "../classes/dbh.class.php";
        include "../classes/addstudents.class.php";
        include "../classes/addstudentCont.class.php";
        

        $addstudent = new AddstudentCont($firstname,$lastname,$gender,$email,$mobile,$birthdate);
        //Running error handler and students adding
        $addstudent->signStudents($firstname,$lastname,$gender,$email,$mobile,$birthdate);
        // going back to front page
        
        header ("location: ../students/students.php?error=none");
        
    }
?>