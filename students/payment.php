<?php session_start(); 
include '../classes/dbh.class.php'; ?>
<!DOCTYPE htlm>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS-->
        <script src="https://kit.fontawesome.com/3378d807ec.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
  <i class="fa-solid fa-users"></i>  Students
 </a>
 <div class="dropdown-menu">
  <ul class="menu2">
     <li ><a href="activestudents.php">Active Students </a></li>
     <li> <a href="graduated.php">Graduated Students</a></li>
     <li><a href="allstudents.php">All students</a></li>
     <li><a href="enrolledstudents.php">Enrolled students</a></li>
     <li><a href="#">Paid students</a></li>
  </ul>
</div>
  <a href="../courses/course.php"><i class="fa-solid fa-users"></i>     Courses</a>
  <a href="../maintanance.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="../maintanance.php"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
  <a href="../maintanance.php"><i class="fa-solid fa-message"></i>     Messages</a>
  <a href="../maintanance.php"> <i class="fa-light fa-eye"></i>     Web Visit</a>
  <a href="../includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  

</div>
<h2> <?php 
  session_start(); 
 echo $_SESSION["username"]; ?> </h2>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>
<hr>
<?php

require_once '../classes/selectcourses.class.php';
require_once '../classes/dbh.class.php';
require_once '../classes/selectstudents.class.php';


  ?>
  <div>
        <form action="../classes/studentenroll.class.php" method="post">
       
    <div class="row">
            <div class="col order-5">
            <table class="table">
                    <thead>
                        <h2> ACTIVE ENROLLED STUDENTS INFROMATION </h2>
                        <tr>
                        <th scope="col">SN NO.</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course FEE</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    require_once '../classes/selectstudents.class.php';
                    require_once '../classes/dbh.class.php';

    $students = new SelectStudents ();
    if ( $students->fetchenrolledId($studentId)){
        
    foreach ($students->fetchenrolledId($studentId) as $Student) { 
    ?>
    <tr>
    <td><?php echo  $Student['student_id'];?></td>
    <td><?php echo  $Student['firstname'];?></td>
    <td><?php echo  $Student['lastname'];?></td>
    <td><?php echo  $Student['course_name'];?></td>
    <td><?php echo  $Student['course_fee'];?></td>
    </tr>
  <?php
}
    } ?>
                  
            </table>

            </div><!--COL ORDER 5 -->


            
        </div> <!--END OF ROW -->


                         
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>


<script src="../js/script.js"></script>
</body>
</html>