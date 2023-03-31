<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["submit"])){
        //grabbing the data
 
        $username = $_POST["username"];
        $password = $_POST["password"];
      
        //instatiate signupContrl class
        include "../classes/dbh.class.php";
        include "../classes/login.class.php";
        include "../classes/loginContr.class.php";
        

        $login = new LoginContr($username,$password);
        //Running error handler and user signup
        $login->loginUser();
        // going back to front page
        header ("location: ../homepage.php");
    }
?>