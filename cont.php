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
    $name=$_POST['name'];
    $email=$_POST['Email'];

    $query= "INSERT INTO `contact`(`Name`, `Email`) VALUES ('$name','$email')";
    $run=mysqli_query($con,$query);
    alert("REQUEST SUBMITTED");
  
    
}

?>
