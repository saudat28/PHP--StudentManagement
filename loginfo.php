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
                <p class="form-par1">WRONG Password OR Username! Please Try again</p>
             <div class="col order-5">
                <form action="includes/login.inc.php" method="post">
                <div class="login-form">
             <div class="contain"> 

             <div class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Username</label>
                  <input type="text" required  name="username" class="form-control" id="formGroupExampleInput">
             </div>
         
             <div class="mb-3">
                 <label for="formGroupExampleInput2" class="form-label">Password</label>
                 <input type="password" required  name="password" class="form-control" id="formGroupExampleInput2">
             </div>
             <div class="mb-3">
             <button type="submit"  name="submit" class="btn btn-primary">Login</button>
             </div>

             </div>
             
                </form>
             </div>
            
        </div>
    </div>
</section>
</body>
</html>