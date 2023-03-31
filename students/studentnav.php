
<?php
include_once 'sidebar.php' ?>
<!DOCTYPE htlm>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS-->
        <script src="https://kit.fontawesome.com/3378d807ec.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <title>STUDENT MANAGE</title>
        <style>
.nav{
 color: #000000;
 transition: all 0.3s ease-in-out;
 height: 100PX;
 float:right;
}

.nav .container{
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding: 20px 0;
 transition: all 0.3s ease-in-out;}
 
.nav ul li {
  display: inline ;
  list-style-type: none;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
}

.nav a:hover{
  color:5d6e6e;
}
.nav a{
 color: fd5d00;
  text-decoration: none;
  padding: 7px 15px;
  transition: all 0.3s ease-in-out;
  font-size: 18px;
  font-weight: 600;
  
}
li .active{
    color:5d6e6e;
}
        </style>
    </head>
    <body>
            <nav class="nav">
                <div class="container">
                    <h1 class="active"></h1>
                    <ul>
                    <li><a href="students/students.php" class="active">NEW STUDENT</a></li>
                        <li><a href="activestudents.php" class="active">ACTIVE STUDENTS</a></li>
                        <li><a href="enrolledstudents.php" > ENROLLED STUDENTS</a></li>
                        <li><a href="graduated.php">GRADUATED STUDENTS </a></li>
                        <li><a href="allstudents.php"> ALL STUDENTS</a></li>
                        <li><a href="#" class="disabled"> PAID STUDENTS</a></li>
                    </ul>
                </div>
            </nav>
</body>
</html>
        