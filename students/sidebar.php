
<!DOCTYPE htlm>
<html>
    <?php
    require_once '../classes/dbh.class.php';; ?>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS-->
        <script src="https://kit.fontawesome.com/3378d807ec.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
  <a href="studentsmain.php"> <i class="fa-solid fa-users"></i>  Students </a>
  <a href="../courses/course.php"><i class="fa-solid fa-users"></i>     Courses</a>
  <a href="../maintanance.php"><i class="fa-solid fa-users"></i>     PAYMENTS</a>
  <a href="../maintanance.php"><i class="fa-solid fa-note-sticky"></i>     Exams</a>
  <a href="../includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>


</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU </span>
<script src="../js/script.js"></script>
</body>
</html>
