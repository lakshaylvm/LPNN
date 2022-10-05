<?php
if (!empty($_REQUEST['button'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $cpass = $_REQUEST['cpassword'];
    if ($pass != $cpass) {
        echo "<script> alert(' Please enter same password');</script>";
    } else {
        echo "<script> alert(' Success ')</script>"; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="inner">
            <div class="welcome">
                A simple Registration Form
            </div>
            <div class="registration_options">
                <form action="" method="post">
                    <div class="rleft_body">
                        <label for="">
                            Enter your email here
                        </label>
                        <br>
                        <label for="">
                            Enter your password here
                        </label>
                        <br>
                        <label for="">
                            Enter password again here
                        </label>
                    </div>
                    <div class="rright_body">
                        <input type="email" name="email" id="">
                        <br><br>
                        <input type="password" name="password" id="">
                        <br><br>
                        <input type="text" name="cpassword" id="">
                    </div>
                    <div class="registration_submit">
                        <input type="submit" value="Save" id="save" name="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    .main{
    height: auto;
    width: 100%;
}
.inner{
    width: 80%;
    height: 580px;
    border: 1px solid white;
    box-shadow: 0 0 10px black;
    margin: 30px auto 30px auto;
    z-index: 50;
}
.welcome{
    text-align: center;
    padding: 20px;
    font-size: 40px;
    font-family: cursive;
    border-bottom: 1px solid black;
    background-color: black;
    color: white;
}
.rleft_body
{
    width: 50%;
    float: left;
    margin-top: 90px;
}
.rleft_body label
{
    font-size: 20px;
    font-style: oblique;
    padding: 150px;
    line-height: 2.5;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.rright_body{
    width: 50%;
    float: left;
    margin-top: 100px;
}
.rright_body input{
    font-size: 20px;
    font-style: oblique;
    width: 80%;
    border: none;
    border-bottom: 1px solid black;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.registration_submit{
    clear: both;
    height: auto;
    text-align: center;
}
#save{
    font-size: 25px;
    background-color: black;
    color: white;
    padding: 5px 35px 5px 35px ;
    border: none;
    margin-top: 80px;
}
</style>