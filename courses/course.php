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

<h2> <?php 
  session_start(); 
 echo $_SESSION["username"]; ?> </h2>

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#"><i class="fa-solid fa-user"></i>     Profile</a>
  <a href="../students/studentsmain.php"> <i class="fa-solid fa-users"></i>  Students </a>
  <a href="#"><i class="fa-solid fa-users"></i>     Courses</a>
  <a href="../maintanance.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="../maintanance.php"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
  <a href="../includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>


</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>






<div class="row">
            <div class="col">
              <h2>ADD COURSES</h2>
            <div class="add-form">
                        <form action="../includes/addcourses.inc.php" method="post">
                            <div class="mb-3">
                              <label for="formGroupExampleInput" class="form-label" >Course Name</label>
                              <input type="text" name="coursename" class="form-control" required id="formGroupExampleInput">
                            </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Course Fee</label>
                            <input type="number" name="coursefee" class="form-control" required id="formGroupExampleInput">
                         </div>
                         
                        <div class="mb-3">
                             <button type="submit" name="submit"class="button1">ADD COURSE </button>
                         </div>
                         
                    </div> <!--END OF SIGN-FORM -->
</form>
             </div>
            <div class="col order-5">
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">SN NO.</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Fee</th>
                        <th scope="col">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php include 'coursedisplay.php' ?>
                  
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