<?php
        include("db.php");
        if(isset($_POST["Login"]))
        {
            $Email=$_POST["Email"];
            $Password=$_POST["Password"];
            echo var_dump($Email,$Password);
            $query=mysqli_query($con,"SELECT * FROM logintable WHERE Email='$Email' and Password='$Password'");
            $row=mysqli_num_rows($query);
           
            if($row==1){
                //$_SESSION['logintabe']='logintable';
                echo"<script>alert('Login Successfully..');
                window.location='Front-Page04.html';</script>";
            }
            else{
                echo"<script>alert('Incorrect Password or Email');
                window.location='FirstPage.php';</script>";
            }
        
        }
    ?>