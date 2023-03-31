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
     <li><a href="#">Enrolled students</a></li>
     <li><a href="#">Paid students</a></li>
  </ul>
</div>
  <a href="../courses/course.php"><i class="fa-solid fa-users"></i>     Courses</a>
  <a href="../maintanance.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="../maintanance.php"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
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
  <div class="enroll-form">
        <form action="../classes/studentenroll.class.php" method="post">
            <?php 
            $students = new SelectStudents();
            $id= $_REQUEST['enrollid'];
    if ( $students->selectbyId($id)){
        
    foreach ($students->selectbyId($id) as $Student ){ 
    ?>
                    <input type="hidden" name="student_id" value= " <?php echo  $Student['student_id'];?>" class="form-control" id="formGroupExampleInput">
   <?php }}?>
                            <div class="mb-3">
                              <label for="formGroupExampleInput" class="form-label">Firstname</label>
                              <input type="text" name="firstname" value= " <?php echo  $Student['firstname'];?>"  class="form-control" id="formGroupExampleInput">
                            </div>
                        <div class="mb-3">
                            
                            <label for="formGroupExampleInput" class="form-label">Lastname</label>
                            <input type="text" name="lastname" class="form-control"  value= " <?php echo  $Student['lastname'];?>" id="formGroupExampleInput">
                         </div>


<?php 
    $courses = new SelectCourses();
    $id1= $_REQUEST['enrollid'];
    if ( $courses->selectbyId($id1)){   
    foreach ($courses->selectbyId($id1) as $Courses ){ 
    ?>
    
    <div class="mb-3">
    <input type="hidden" name="courseid" value= <?php echo  $Courses ['course_id'];?>>
    </div>
   
  <?php
}
    }
       
 $course1 = new SelectCourses();
    if ( $course1->fetchcoursedata()){
        
    foreach ($course1->fetchcoursedata() as $Coursess ){ 
    ?>
    <tr>
    <td><?php echo  $Coursess ['course_name'];?></td>
    <div class="mb-3">
    <?php 
     if ( $courses->selectbyId($id1)){   
        foreach ($courses->selectbyId($id1) as $Courses){
        ?>
    <input type="hidden" name="courseid" value= <?php echo  $Courses ['course_id'];?>>
    <?php }}?>
  <input type="checkbox" id="" name="courseid" value="<?php echo  $Coursess ['course_id'];?>" >
 
</div>
    </tr>
  <?php
}
    }
        ?>


    
<div class="mb-3">
  <button type="submit" value = "submit" name="submit"class="button1">ENROLL</button>
</div>


</div> <!--END OF SIGN-FORM -->
</form>


    </div>


                         
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>


<script src="../js/script.js"></script>
</body>
</html>