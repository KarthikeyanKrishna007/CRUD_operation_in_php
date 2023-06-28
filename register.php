<?php
    require 'db.php';
    if(isset($_POST["register"]))
    {
        $Username=$_POST["Username"];
        $Email=$_POST["Email"];
        $Password=$_POST["Password"];
        
        echo var_dump($Username,$Password);
        // $duplicate=mysqli_query($con,"SELECT * FROM registertable WHERE Username='$Username' OR Email='$Email'");
        // if(mysqli_num_rows($duplicate) > 0)
        // {
        //     echo"<script>alert('Username or Email are already taken')</script>";
        // }
        // else
        // {
            
                $query="INSERT INTO registertable VALUES(null,'$Username','$Email')";
                $result1=mysqli_query($con,$query);
                $last_id = mysqli_insert_id($con);
                echo var_dump($result1);
                echo var_dump($last_id);
                $login_="INSERT INTO logintable VALUES(null,'$last_id','$Email','$Password')";
                $result2=mysqli_query($con,$login_);
                echo var_dump($login_,$result2);
                echo"<script>alert('Registeration Successfull..');
                window.location='Firstpage.php';</script>";
            



           
        // }
    }
    ?>