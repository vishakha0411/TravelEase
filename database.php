<?php 
$servername="localhost";
$username="root";
$password="";
$database="travel";
$con=mysqli_connect($servername,$username,$password,$database);
//$con=mysqli_connect("localhost","root","","library");
if($con)
{
    echo"Successful";
}
//    else
//        die("error detected".mysqli_error($con));
?>