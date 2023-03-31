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
<div class="row"> 
  <div class="col-md-4">
  <h2>Welcome  <?php 
  session_start(); 
  echo $_SESSION["username"]; ?> </h2>
  </div>
  
</div>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#"><i class="fa-solid fa-user"></i>     Profile</a>
  <a href="students/studentsmain.php"> <i class="fa-solid fa-users"></i>  Students </a>
  <a href="courses/course.php"><i class="fa-solid fa-users"></i>     Courses</a>
  <a href="maintanance.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="maintanance.php"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
  <a href="includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>


<div class="row "> 
  <div class="col cover">

  <image src="css/images/template.png" class="front-img" alt="">
  </div>

            <div class="col order-5">
            <h2> ACTIVE STUDENTS <h2>
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">SN NO.</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                     $students = new SelectStudents ();
                     if ( $students->fetchdataactive()){
                         
                     foreach ($students->fetchdataactive() as $Student) { 
                     ?>
                         <tr>
                         <td><?php echo  $Student['student_id'];?></td>
                         <td><?php echo  $Student['firstname'];?></td>
                         <td><?php echo  $Student['lastname'];?></td>
                         <td><?php echo  $Student['gender'];?></td>
                         <td><?php echo  $Student['email'];?></td>
                         <td><?php echo  $Student['mobile'];?></td>
                         <td><?php echo  $Student['birthdate'];?></td>
                         <td><?php echo  $Student['status'];?></td>
                         </tr>
                       <?php
                     }
                         }
                    ?>
                  
            </table>
            </div><!--COL ORDER 5 -->
        </div> <!--END OF ROW -->
<?php
?>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>


<script src="js/script.js"></script>
</body>
</html>