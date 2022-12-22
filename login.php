<?php 

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname='contactus';

$con = mysqli_connect($host,$username,$password,$dbname);
if(!$con){
    die("Sorry we failed to connect".mysqli_connect_error());
}


if(isset($_POST['submit']))
  {  	
    $email=$_POST['email'];
    $passwd=$_POST['password'];
     
    $sql = " INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$passwd')";
    $query = mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($query);
     header("Location:index.html");
   
}
?>