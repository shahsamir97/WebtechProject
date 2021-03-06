<html>
<head>
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="../styles/login_page_style.css">
    <script type="text/javascript" src="../scripts/login.js"></script>
</head>
<body>
<?php
session_start();

include "header.php";

$email = $password = "";
$emailErr = $passwordErr = null;

if (isset($_COOKIE['email'])){
    $email = trim($_COOKIE['email']);
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['email'])) {
        $email = test_input($_POST['email']);
        if (!empty($email)){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            else{
                $emailErr = false;
            }
        }else{
            $emailErr = "Email cannot be empty";
        }
    }

    if (isset($_POST['password'])) {
        $password = test_input($_POST['password']);
        if (empty($password)){
            $passwordErr = "Password cannot be empty";
        }
    }

    if (!$emailErr && !$passwordErr){
        require $_SERVER['DOCUMENT_ROOT']."/controller/login_controller.php";
        $userID = signIn($email, $password);
        if($userID != null){
            //saving user login info
            $ipAddress = getIpAddress();
            date_default_timezone_set("Asia/Dhaka");
            $time = date("l jS \of F Y h:i:s A");
            storeLoginInfo($userID, $ipAddress, $time);
        //ends
            //saving userinfo in session
            $_SESSION['userId'] = $userID;
            $_SESSION['email'] = $email;
            //ends
            //redirecting to profile page
            header('Location: seller_profile.php');
        }else{
            echo "<script>alert('Wrong Credentials. Couldn\'t Sign In!')</script>";
        }
    }
}

if (isset($_POST['rememberMe'])){
    setcookie("email", $email);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getIpAddress(){
    //whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
//whether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>

<form method="post" action="<?php echo htmlspecialchars(@$_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()">
    <div class="content">
        <div class="rounded-form">
            <h2>Sign In</h2>
            <div class="input-field-margin">
                <input id="email" class="rounded-input-field " type="text" name="email" value="<?php echo $email?>" placeholder="Your Email"><br>
                <p id="emailErr" class="error"><?php echo $emailErr?></p>
            </div>
           <div class="input-field-margin">
               <input id="password" class="rounded-input-field " type="password" name="password" value="<?php echo $password?>" placeholder="Password"><br>
               <p id="passwordErr" class="error"><?php echo $passwordErr?></p>
           </div>
            <input class="input-field-margin checkbox-style" type="checkbox" name="rememberMe"><span class="checkbox-style">Remember Me</span><br>
            <input class="rectangular-button input-field-margin" type="submit" name="submit" value="Login"><br>
            <a href="ForgetPassword.php" class="action-button-margin">Forget Password?</a>
        </div>
    </div>
</form>
<?php include "footer.php" ?>
</body>

</html>
