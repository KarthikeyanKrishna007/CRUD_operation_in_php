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
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 m-auto">   
            <table class="table  table-striped">
            <tr>
                <th class="bg-dark text-white">Id</th>
                <th class="bg-dark text-white">Username</th>
                <th class="bg-dark text-white">Email</th>
                <th  class="bg-dark text-white text-center">Operation</th>
            </tr>
            <?php
        
            $con=mysqli_connect("localhost","root","","mydatabase");
            if(!$con){
                die("Error..".mysqli_error());
            }else{
                // echo"successfully connected..";
            }
            $sql="SELECT * FROM registertable";
            $result=$con->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                    <td>".$row['Id']."</td>
                    <td>".$row['Username']."</td>
                    <td>".$row['Email']."</td>
                    <td class='text-center'>
                    <a class='btn btn-success' href='update.php?id=$row[Id]&username=$row[Username]&email=$row[Email]'>Edit</a></td>
                    </tr>";             
                }
                echo"</table>";
            }else{
                echo"no records";
            }
            $con->close();
            ?>
            <tr>
                
            
            </table>
        </div>
        <div class="col-sm-1 m-auto">
        <button class="btn btn-primary " onclick='window.location="Front-Page04.html"'>Back</button>
        </div>
    </div>
</div>

</section>
</body>
</html>