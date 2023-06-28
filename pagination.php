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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
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
        <div class="col-sm-8">
        </div>

        <!--Search Button Query-->

        <div class="col-sm-4 ">
            <form  method="POST" id="login" >
                <div class="input-group mb-3">
                        
                    <input type="text" name="search" class="form-control" placeholder="Serach here..">
                    <button  id="btn" class="btn btn-primary"  name="submit"><span class="input-group-text"><i class="fa fa-search"></i></span></button>
                </div>
            </form>
        </div>
        <!-- <div class="col-sm-12 m-auto">   
            <table class="table  table-striped">-->
            
            <!--  
                // include("db.php");
                // if(isset($_POST['submit']))
                // {
                //     $search=$_POST['search'];
                //     $sql2="SELECT * FROM registertable WHERE Username like'%$search%' OR Id like'%$search%' OR Email like'%$search%'";
                //     $result5=mysqli_query($con,$sql2);
                //     // echo var_dump($result5);
                //     if($result5)
            //         {
            //             if(mysqli_num_rows($result5) > 0)
            //             {
            //                 echo"<tr>
            //                 <th class='bg-dark text-white'>Id</th>
            //                 <th class='bg-dark text-white'>Username</th>
            //                 <th class='bg-dark text-white'>Email</th>
            //                 <th colspan='2' class='bg-dark text-white text-center'>Operation</th>
            //                 </tr>";
            //                 while($row=mysqli_fetch_assoc($result5))
            //                 {
            //                     echo"<tr>
            //                     <td>".$row['Id']."</td>
            //                     <td>".$row['Username']."</td>
            //                     <td>".$row['Email']."</td>
            //                     <td class='text-center'>
            //                     <a class='btn btn-success d-grid' href='update.php?id=$row[Id]&username=$row[Username]&email=$row[Email]'>Edit</a></td>
            //                     <td class='text-center'>
            //                     <a class='btn btn-danger d-grid' href='pagination.php?Id=$row[Id]'>Delete</a></td>
            //                     </tr>";
            //                 }
                            
            //             }else{
            //                 echo"<h1 class='text-danger'>Not Found..</h1>";
            //             }
                
            //         }
            // }
            // ?>           
            </table>            
        </div>
    </div>
</div>-->

<div class="container mt-5">
    <div class="row">    

    <!--Search Query and Pagination Query-->

        <div class="col-sm-12 m-auto">   
            <table class="table  table-striped">
            <tr>
                <th class="bg-dark text-white">Id</th>
                <th class="bg-dark text-white">Username</th>
                <th class="bg-dark text-white">Email</th>
                <th colspan="2" class="bg-dark text-white text-center">Operation</th>
            </tr>
            <?php
        
                $con=mysqli_connect("localhost","root","","mydatabase");
                if(!$con)
                {
                    die("Error..".mysqli_error());
                }else
                {
                    // echo"successfully connected..";
                }
                
                //Serach Query
                
                if(isset($_POST['submit']))
                {
                    $search=$_POST['search'];
                    $sql2="SELECT * FROM registertable WHERE Username like'%$search%' OR Id like'%$search%' OR Email like'%$search%'";
                    $result5=mysqli_query($con,$sql2);
                    // echo var_dump($result5);
                    if($result5){
                        
                        
                            while($row1=mysqli_fetch_assoc($result5))
                            {
                            echo"<tr>
                            <td>".$row1['Id']."</td>
                            <td>".$row1['Username']."</td>
                            <td>".$row1['Email']."</td>
                            <td class='text-center'>
                            <a class='btn btn-success d-grid' href='update.php?id=$row1[Id]&username=$row1[Username]&email=$row1[Email]'>Edit</a></td>
                            <td class='text-center'>
                            <a class='btn btn-danger d-grid' href='pagination.php?Id=$row1[Id]'>Delete</a></td>
                            </tr>";  
                            }
                        

                    }
                }
                
                //Pagination Query
                
                else
                {
                $sql="SELECT * FROM registertable ";
                $result=mysqli_query($con,$sql);
                $result3=mysqli_num_rows($result);
                $numberPages=5;
                $totalPages=ceil($result3/$numberPages) ;
                // echo $totalPages;
                for($btn=1; $btn<=$totalPages; $btn++)
                {
                
                    echo"<button class='btn btn-primary mx-1 my-3 '><a 
                    href='pagination.php?page=$btn'class='btn btn-light'>
                    $btn</a></button>";
                
                }
            
                if(isset($_GET['page']))
                {
                    $page=$_GET['page'];
                    // echo $page;
                
                }else
                {
                    $page=1;
                }
                $stringlimit=($page-1)*$numberPages;
                $sql1="SELECT * FROM registertable limit $stringlimit,$numberPages";
                
                
                $result4=mysqli_query($con,$sql1);
        
                while($row=mysqli_fetch_assoc($result4))
                {
                    echo"<tr>
                    <td>".$row['Id']."</td>
                    <td>".$row['Username']."</td>
                    <td>".$row['Email']."</td>
                    <td class='text-center'>
                    <a class='btn btn-success d-grid' href='update.php?id=$row[Id]&username=$row[Username]&email=$row[Email]'>Edit</a></td>
                    <td class='text-center'>
                    <a class='btn btn-danger d-grid' href='pagination.php?Id=$row[Id]'>Delete</a></td>
                    </tr>";             
                }
                echo"</table>";
            
               
                }
                $con->close();
            ?>                                        
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
<?php
include("db.php");
if(isset($_GET['Id']))
{
    $Id=$_GET['Id'];
    
    echo var_dump($Id);
    
    $query="DELETE FROM registertable WHERE Id='$Id'";
    $data=mysqli_query($con,$query);
    echo var_dump($query,$data);
    echo"<script>alert('Deleted..');
    window.location='pagination.php';</script>";
        
        
}
?>
