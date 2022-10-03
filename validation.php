<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "lpnn";
$conn = mysqli_connect('localhost','root','','lpnn');
mysqli_select_db($conn,'lpnn');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `registration` WHERE username = '$username' && password = '$password'";

$result = $conn->query($query);

$data = $result ->  fetch_assoc();

$num = mysqli_num_rows($result);
if($num == 1){

    header('location:./main.php');
}
else{
    header('location:./notes.php');
}
?>