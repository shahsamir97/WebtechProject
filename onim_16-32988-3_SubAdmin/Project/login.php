<?php
require_once "vendor/autoload.php";
include 'config.php';
session_start();
$hostName='localhost';
$userName='root';
$password='';
$dbName='game';
$con= mysqli_connect($hostName,$userName,$password,$dbName);
if(isset($_POST['submit'])){


    $email = $_POST['email'];
$password = $_POST['password'];


    $email = stripcslashes($email);
$password = stripcslashes($password);

    $email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from admin where email = '$email' and password = '$password'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);



if ($count == 1) {

    $_SESSION['login_user'] = $email;

    header("location: view.php");
} else {
    $error = "Your Login Name or Password is invalid";

}
}

?>

<html>
<head>
    <title>Admin Login Form</title>

    <script type="text/javascript">
        function validate() {


            var email = document.forms["myform"]["email"].value;
            if(email==""){
                alert("Please enter the email");
                return false;
            }else{
                var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
                var x=re.test(email);
                if(x){
                }else{
                    alert("Email id not in correct format");
                    return false;
                }
            }


            var password = document.forms["myform"]["password"].value;
            if(password==""){
                alert("Please enter the password");
                return false;
            }
        }
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1 style="background: brown" align="center">Game Buddy</h1>
</head>
<body style="background: cyan">
<link rel="stylesheet" href="css/stylesheet.css">
<a href="admin-register.php" style=" color: #4CAF50; background: brown">Admin Register Form</a>
<form name="myform" onsubmit="return validate()" action="" method="POST" style="height: 350px; width: 400px ;margin-left: 500px">
    <div class="container">
        <h1>Admin Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" >

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" >

        <button type="submit"  name="submit">Login</button>

    </div>


</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


