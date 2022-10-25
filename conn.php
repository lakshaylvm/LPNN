<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$database = "lpnn";
$conn = mysqli_connect('localhost','root','','lpnn');
session_start();
if($conn){
    header("location:./index.php");
}
// else{
//     echo "No connection";
// }

mysqli_select_db($conn,'lpnn');
$name= $_POST['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$confirm= $_POST['confirm'];
$user= $_POST['user'];
$query = "INSERT INTO `register`(`name`, `username`, `password`, `confirm`, `user`) VALUES ('$name','$username','$password','$confirm','$user')";
if($password==$confirm){
    mysqli_query($conn,$query);
}
else{
    echo"<script type='text/jscript'>alert('Please enter the same password')</script>"; 
}
?>