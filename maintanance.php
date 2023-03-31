<!DOCTYPE htlm>
<html>
 <?php
   require_once 'classes/selectstudents.class.php';
   require_once 'classes/dbh.class.php';
   
 ?>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS-->
        <script src="https://kit.fontawesome.com/3378d807ec.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <title>STUDENT MANAGE</title>
    </head>
<body>

</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fa-solid fa-user"></i>     Profile</a>
  <a href="students/students.php"><i class="fa-solid fa-users"></i>     Students</a>

  <a href="courses/courses.php"><i class="fa-solid fa-note-sticky"></i>     Courses</a>
  <a href="students/payment.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="#"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
  <a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>     Logout</a>
  

</div>
<h2> <?php 
  session_start(); 
 echo $_SESSION["username"]; ?> </h2>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>
<hr>

<div class="maintain">
<h1> PAGE UNDER MAINTANANCE</h1>
<i class="fa-solid fa-screwdriver-wrench"></i>
<h4>  Coming back soon </h4>

</div>


<script src="js/script.js"></script>
</body>
</html>

