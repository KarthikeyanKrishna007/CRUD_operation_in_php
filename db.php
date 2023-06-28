<?php

$con=mysqli_connect("localhost","root","","mydatabase");
if(!$con){
    die("Database not connected..".mysqli_error());
}
else{
    // echo"Connected Successfully..";
}
?>