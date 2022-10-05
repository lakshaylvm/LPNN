<?php
session_start();
$con =new mysqli("localhost","root","","lpnn");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `register` WHERE username = '$username' && password = '$password'";

$result = $con->query($query);
$data = $result ->  fetch_assoc();



$num = mysqli_num_rows($result);
if($num==1){
    $user= $data['username'] ;
    header('location:./notes.php');
}
else{
    header('location:./main.php');}
?>
