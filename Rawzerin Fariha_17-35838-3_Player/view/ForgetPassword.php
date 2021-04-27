<html>
<head>
    <title>Forget Password</title>
   <link type="text/css" rel="stylesheet" href="../styles/forget_password.css">
    <script type="text/javascript" src="../scripts/forget_password.js"></script>
</head>
<body>
<?php
include "header.php";

$email = $emailErr = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}
?>
<form action="<?php echo htmlspecialchars(@$_SERVER['PHP_SELF']);?>" onsubmit="return validateForm()">
    <div class="content">
        <div class="rounded-form">
            <h2>Forget Password</h2>
            <input id="email" class="rounded-input-field input-field-margin" type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email"><br>
            <p id="emailErr" class="error"><?php echo $emailErr?></p><br>
            <input id="" class="rectangular-button input-field-margin" type="submit" name="submit" value="Submit"><br>
        </div>
    </div>
</form>
<?php include "footer.php" ?>
</body>

</html>
