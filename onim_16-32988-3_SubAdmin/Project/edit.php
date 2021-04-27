<?php
require_once "vendor/autoload.php";

use App\classes\Register;
$id=$_GET['id'];
$result= (new App\classes\Register)->registerupdate($id);
$data = mysqli_fetch_assoc($result);



if (isset($_POST['btn'])){
    (new App\classes\Register)->registerupdates($_POST);
}




?>
<html>
<head>
    <title>Registration Update</title>
    <h1 style="background: brown">Game Buddy</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript">
        function validate() {
            var name = document.forms["myform"]["name"].value;
            if(name==""){
                alert("Please enter the name");
                return false;
            }else {
                var re = /^[a-zA-Z ]{2,30}$/;
                var x = re.test(name);
                if (x) {
                } else {
                    alert("Name is not in correct ");
                    return false;
                }
            }

            var country = document.forms["myform"]["country"].value;
            if(country==""){
                alert("Please enter the Country name");
                return false;
            }else {
                var re = /^[a-zA-Z ]{2,30}$/;
                var x = re.test(country);
                if (x) {
                } else {
                    alert("Country is not in correct ");
                    return false;
                }
            }

            var phone = document.forms["myform"]["phone"].value;
            if(phone==""){
                alert("Please enter the mobile");
                return false;
            }else {

                var re = /^[0-9]{11} *$/;
                var x = re.test(phone);
                if (x) {
                } else {
                    alert("phone Number is not in correct ");
                    return false;
                }
            }

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


</head>
<body style="background:cyan ">
<link rel="stylesheet" href="css/stylesheet.css">
<a href="index.php" style="background: #4CAF50">Add Data</a>
<a href="view.php" style="background:green">View Data</a>
<form name="myform" onsubmit="return validate()" action="" method="POST">
    <div class="container">
        <h1>Updating data</h1>

        <label for="firstname"><b>Name</b></label>
        <input type="text"  name="name" value="<?php echo  $data['name'];?>" >
        <input type="hidden"  name="id" value="<?php echo  $data['id'];?>" >


        <label for="lastname"><b>Country</b></label>
        <input type="text"  name="country" value="<?php echo  $data['country'];?>">

        <label for="phone"><b>Phone</b></label>
        <input type="text" name="phone" value="<?php echo  $data['phone'];?> ">


        <label for="email"><b>Email</b></label>
        <input type="text"  name="email" value="<?php echo  $data['email'];?>">

        <label for="psw"><b>Password</b></label>
        <input type="password"  name="password" value="<?php echo  $data['password'];?>">


        <button type="submit"  name="btn">Update</button>
    </div>


</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
