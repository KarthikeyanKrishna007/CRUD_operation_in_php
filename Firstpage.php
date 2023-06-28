<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Page-Login&Register</title>
    <link href="../css/stylesheet4.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <link href="../css/stylesheet5.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
</head>
<body class="bg-warning">
<section id="home" class="active">
        <nav class="navbar navbar-expand-sm bg-light" id="nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://www.casagrand.co.in/wp-content/uploads/2021/07/Casagrand-Logo1.png?ver=1.200" alt="Logo" style="width:20vw; height:50px; background-color: white;" class="img-fluid">
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a id="nav-item" class="nav-link active" aria-current="page"  href="alert.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="alert.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="alert.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="alert.php">Projects</a>
                        </li>
                        
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5" >
            <div class="row ">
                <div class="col-sm-4 bg-light m-auto text-center" id="box">
                    <h4 class=" pt-3 mb-3 ">WELCOME TO CASAGRAND</h4> 
                    <button type="button" class="btn btn-outline-success " id="btn1">Login</button>  
                    <button type="button" class="btn btn-outline-success " id="btn2">Register</button>  
                </div>
            </div>
        </div> 
</section>
  <section>
    <div id="body3">

    </div>
  </section>
  <section>
    <div id="body4">
      
    </div>
  </section>
    <script>
      //login page
        $(document).ready(function() {
          $("#btn1").click(function(){
            $("#body3").load("LoginDesign.php")
          })
        });

        $(document).ready(function() {
          $("#btn2").click(function(){
            $("#body3").hide("LoginDesign.php")
          })
        });

        $(document).ready(function() {
          $("#btn1").click(function(){
            $("#body3").show("LoginDesign.php")
          })
        });
        
        //register page
        $(document).ready(function() {
          $("#btn2").click(function(){
            $("#body4").load("NewRegisterationDesign.php")
          })
        });

        $(document).ready(function() {
          $("#btn1").click(function(){
            $("#body4").hide("NewRegisterationDesign.php")
          })
        });

        $(document).ready(function() {
          $("#btn2").click(function(){
            $("#body4").show("NewRegisterationDesign.php")
          })
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
      
       
      
   
</body>
</html>
