<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$database = "lpnn";
$conn = mysqli_connect('localhost','root','','lpnn');



mysqli_select_db($conn,'lpnn');
$name= isset($_POST['name']);
$username= isset($_POST['username']);
$password= isset($_POST['password']);
$confirm= isset($_POST['confirm']);
$user= isset($_POST['user']);
$query = "INSERT INTO `register`(`name`, `username`, `password`, `confirm`, `user`) VALUES ('$name','$username','$password','$confirm','$user')";
$result = mysqli_query($conn,$query);

 if($conn){
    // header('location:./notes.php');
    echo "<script> alert(' Please enter same password');</script>";
    // header('location:./main.php');
}
    
else{
    echo "No connection";
}
?>
