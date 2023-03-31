<!DOCTYPE htlm>
<html>
    
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
<section id="section-cover">
    <div class ="content">
        <div class="row">
            <div class="col">
                <div class="cover">
                <h2></h2>
                <p>Please Sign up here to access this system</p>
                </div>
             </div>
            <div class="col order-5">
                    <div class="sign-form">
                        <form action="includes/signup.inc.php" method="post">
                            <div class="mb-3">
                              <label for="formGroupExampleInput" class="form-label">Firstname</label>
                              <input type="text" required  name="firstname" class="form-control" id="formGroupExampleInput">
                            </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Lastname</label>
                            <input type="text" required  name="lastname" class="form-control" id="formGroupExampleInput">
                         </div>
                         <div class="mb-3">
                             <label for="formGroupExampleInput" class="form-label">Email</label>
                             <input type="email" required  name="email" class="form-control" id="formGroupExampleInput">
                        </div>
                         <div class="mb-3">
                             <label for="formGroupExampleInput" class="form-label">Mobile</label>
                             <input type="number" required  name="mobile" class="form-control" id="formGroupExampleInput">
                         </div>
                         <div class="mb-3">
                             <label for="formGroupExampleInput" class="form-label">Username</label>
                             <input type="text"required  name="username" class="form-control" id="formGroupExampleInput">
                         </div>
                         <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                             <input type="password" required  name="password" class="form-control" id="formGroupExampleInput2">
                         </div>
                         <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Re-enter your Password</label>
                             <input type="password" required  name="passwordrepe" class="form-control" id="formGroupExampleInput2">
                         </div>
                        <div class="mb-3">
                             <button type="submit" name="submit"class="button1">Sign Up</button>
                         </div>
                            <p class="form-par"> Already have an account? Please <a href="loginpage.php" class="login-link" >Login </a> here</p>
                    </div> <!--END OF SIGN-FORM -->
                            </form>
            </div><!--COL ORDER 5 -->
        </div> <!--END OF ROW -->
    </div><!--END OF CONTENT -->
</section>
</body>
</html>