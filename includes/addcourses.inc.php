<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["submit"])){
        //grabbing the data
        $course_name = $_POST["coursename"];
        $course_fee= $_POST["coursefee"];
       

        //instatiate addstudentContrl class
        include "../classes/dbh.class.php";
        include "../classes/addcourse.class.php";
        include "../classes/addcourseCont.class.php";
        

        $addcourse = new AddcourseCont($course_name, $course_fee);
        //Running error handler and students adding
        $addcourse->signCourse($course_name, $course_fee);
        // going back to front page
        
        header ("location: ../courses/course.php?error=none");
        
    }
?>