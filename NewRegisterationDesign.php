<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link href="../css/stylesheet4.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<!-- Login -->

<section >
        <div class="container mt-5" >
            <div class="row ">
                <div class="col-md-4 bg-white m-auto " id="box">
                    <h1 class="text-center pt-3 mb-3 ">New Registeration</h1> 

                    <!-- form  -->

                    <form action="register.php" method="post" id="login" autocomplete="off">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="Username"  class="form-control" placeholder="UserName" >
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="Email"  class="form-control" placeholder="Email" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="Password" id="pass" class="form-control" placeholder="Password" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="Conformpassword" id="pass1" class="form-control" placeholder="Conform Password">
                        </div>
                        <div class="input-group mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="show" onclick="myfun()"> Show Password
                            </label>
                        </div>
                        <div class="input-group mb-3 d-grid">
                            <button  id="btn" class="btn btn-outline-success" name="register">Register</button>
                        </div>
                        
                        <div class="text-center">
                            <div>
                                <a href="new.php"  id="text">Already You have an account?</a>
                            </div>
                            <div>
                                <a href="#"  id="text">Terms and Condition</a>
                            </div>
                            <div>
                                <a href="#"  id="text">Privacy and Policy</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <script>
        function myfun()
        {
            var x = document.getElementById("pass");
    	    if (x.type === "password") 
            {
                x.type = "text";
            } 
            else 
            {
                x.type = "password";
            }
            var y = document.getElementById("pass1");
    	    if (y.type === "password") 
            {
                y.type = "text";
            } 
            else 
            {
                y.type = "password";
            }
        }
       
    </script>
    
</body>
</html>
