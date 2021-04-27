<html>
<head>
    <link rel="stylesheet" href="../styles/header_style.css"
</head>
<body>
<?php
$loggedIn = "hidden";
$loggedOut = "visible";
if (isset($_SESSION['userId'])){
    $loggedIn = "visible";
    $loggedOut= "hidden";
}
?>

<div class="header">
    <img src="../img/logo.png" alt="company logo" class="headerLogo"/>

    <div class="header-right">
        <div id="logged_in_header" style="visibility:<?php echo $loggedIn?>; display: <?php if(!isset($_SESSION['email'])){echo "none";}else{echo "initial";}?>">
            <a href="../view/profile.php" id="userName"">Logged in as <?php if (isset($_SESSION['email']))echo $_SESSION['email']?></a>
            <a href="logout.php">Logout</a>
        </div>
        <div id="logged_out_header" style="visibility:<?php echo $loggedOut?>; display: <?php if (isset($_SESSION['email'])){echo "none";}else{echo "initial";}?>">
            <a  href="../view/HomePage.php">Home</a>
            <a  href="../view/login.php">Login</a>
            <a  href="../view/Registration.php">Registration</a>
        </div>
    </div>
</div>
</body>

</html>
