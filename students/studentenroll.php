<?php session_start(); 
include '../classes/dbh.class.php';
include '../classes/update.class.php';
require_once '../classes/selectstudents.class.php' ?> 
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


<!--
    <h2> /*<php
  session_start(); 
  echo $_SESSION["username"]; ?> </h2> -->
  <?php
include_once 'sidebar.php';?>
<hr>

<div class="row">
            <div class="col">
              <h2>ENROLL STUDENT </h2>
            <div class="add-form">
                        <form action="../classes/update.class.php" method="post">
                        <div class="mb-3">
                        <?php 
                 $id =$_REQUEST['enrollid'];
                $students = new SelectStudents ();
                if ($students->selectbyId($id)){
                 foreach ($students->selectbyId($id) as $Student1) { 
                 ?>
         <div class="mb-3">
          <input type="hidden" name="student_id" value= " <?php echo  $Student1['student_id'];?>" class="form-control" id="formGroupExampleInput">
       </div>
        <label for="formGroupExampleInput" class="form-label">Firstname</label>
        <input type="text" name="firstname" value= "<?php echo  $Student1['firstname'];?>" class="form-control" id="formGroupExampleInput">
          </div>
      <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Lastname</label>
          <input type="text" name="lastname" value= " <?php echo  $Student1['lastname'];?>" class="form-control" id="formGroupExampleInput">
       </div>
       <div class="mb-3">
           <label for="formGroupExampleInput" class="form-label">Gender</label>  
      </div><br>
      <div class="mb-3">
      <div class="form-check"> 
          <input class="form-check-input" type="radio" name="gender" value="female" id="female" checked>
          <label class="form-check-label" for="female">
              Female
          </label>
          </div>
          <div class="form-check">
          &nbsp&nbsp<input class="form-check-input" type="radio" value= "male" name="gender" id="male" >
          <label class="form-check-label" for="male">
              Male
            </label>
          </div>
      </div>
          
  
      <div class="mb-3">
           <button type="submit" value = "submit" name="submit" class="button1">UPDATE</button>
 
       </div>
       
        </div> <!--END OF SIGN-FORM -->
</form>


             </div>
<?php 
} 
}?>
            <div class="col order-5">
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
                        <th scope="col">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php include 'display.php' ?>
                  
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