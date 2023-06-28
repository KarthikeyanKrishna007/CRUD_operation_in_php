<?php
         include("db.php");

        
        error_reporting(0);
        $id=$_GET['id'];
        $username=$_GET['username'];
        $email=$_GET['email'];
        
        
?>


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
                            <a id="nav-item" class="nav-link active" aria-current="page"  href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-item" class="nav-link" href="Firstpage.php">SignOut</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section>
<!-- update -->
    <section>
        <div class="container mt-5" >
            <div class="row ">
                <div class="col-md-4 bg-white m-auto " id="box">
                    <h1 class="text-center pt-3 mb-3 ">Update Records</h1> 

                    <!-- form  -->

                    <form  method="GET" id="login" >
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="Id" value="<?php echo $id;?>" class="form-control" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" name="Username" value="<?php echo $username; ?>" class="form-control" >
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="Email" value="<?php echo $email;?>" class="form-control" >
                        </div>
                        
                        
                        <div class="input-group mb-3 d-grid">
                            <button  id="btn" class="btn btn-outline-success" name="update">Update</button>
                        </div>
                        
                        <div class="text-center">
                           
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
    
</body>
</html>
<?php
    include("db.php");
    if(isset($_GET['update']))
    {
        $Id=$_GET['Id'];
        $Username=$_GET['Username'];
        $Email=$_GET['Email'];
        echo var_dump($Id,$Username,$Email);
        
        $query="UPDATE registertable SET Username='$Username',Email='$Email' WHERE Id='$Id'";
        $data=mysqli_query($con,$query);
        echo var_dump($query,$data);
        echo"<script>alert('Updated..');
        window.location='pagination.php';</script>";
            
            
    }
    
    
?>

