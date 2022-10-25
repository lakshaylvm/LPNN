<?php
$con =new mysqli("localhost","root","","lpnn");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `register` WHERE username = '$username' && password = '$password'";

$result = $con->query($query);
$data = $result ->  fetch_assoc();



$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['name']= $name;
    $user= $data['username'] ;
    header('location:./main.php');
}
else{
    header('location:./index.php');}
?>
