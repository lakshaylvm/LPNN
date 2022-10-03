<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$database = "lpnn";
$conn = mysqli_connect('localhost','root','','lpnn');

if($conn){
    echo "Connection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($conn,'lpnn');
$name= $_POST['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$confirm= $_POST['confirm'];
$user= $_POST['user'];
$query = "INSERT INTO `registration`(`name`, `username`, `password`, `confirm`, `user`) VALUES ('$name','$username','$password','$confirm','$user')";
mysqli_query($conn,$query);
?>