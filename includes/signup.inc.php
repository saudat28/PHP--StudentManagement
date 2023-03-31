<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["submit"])){
        //grabbing the data
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $username= $_POST["username"];
        $password = $_POST["password"];
        $passwordrepe = $_POST["passwordrepe"];

        //instatiate signupContrl class
        include "../classes/dbh.class.php";
        include "../classes/signup.class.php";
        include "../classes/signupContr.class.php";
        

        $signup = new SignupContrl($firstname,$lastname,$email,$mobile,$username,$password,$passwordrepe);
        //Running error handler and user signup
        $signup->signupUser();
        // going back to front page
        header ("location:../homepage.php");
    }
?>